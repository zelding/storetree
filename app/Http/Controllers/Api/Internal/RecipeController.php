<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/30/17 10:29 AM
 */

namespace App\Http\Controllers\Api\Internal;

use App\Item;
use App\Recipe;
use App\Utils\Transformers\RecipeTransformer;
use League\Fractal\Resource\Item as ResourceItem;
use League\Fractal\Resource\Collection as ResourceCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /**
     * @param integer $dota_id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($dota_id)
    {
        $item = Item::with('recipes.components')
                    ->where('dota_id', $dota_id)
                    ->first();

        if ( !$item instanceof Item) {
            return $this->errorResponse(404, "Item not found", ['dota_id']);
        }

        $data = new ResourceCollection($item->recipes, new RecipeTransformer());

        $this->fractal->parseIncludes('components');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }

    /**
     * @param Request $request
     * @param integer $dota_id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request, $dota_id)
    {
        $item = Item::with('recipes.components')
            ->where('dota_id', $dota_id)
            ->first();

        if ( !$item instanceof Item) {
            return $this->errorResponse(404, "Item not found", ['dota_id']);
        }

        $items = $request->get('items') ?? [];

        $recipe = new Recipe();
        $recipe->item_id = $item->id;
        $recipe->save();

        $item->recipes()->save($recipe);

        if( !empty($items) ) {
            foreach( $items as $item_id ) {
                try {
                    $comp = Item::findOrFail($item_id);

                    $recipe->components()->attach($comp);
                }
                catch(\Throwable $ex) {
                    return $this->errorResponse(409, "Component id {$item_id} does not exists", ['items']);
                }
            }
        }

        $data = new ResourceItem($recipe, new RecipeTransformer());

        $this->fractal->parseIncludes('components');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            201,
            [],
            480
        );
    }

    /**
     * @param integer $recipe_id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($recipe_id)
    {
        $recipe = Recipe::with('components')
                    ->find($recipe_id);

        if ( !$recipe instanceof Recipe) {
            return $this->errorResponse(404, "Recipe not found", ['recipe_id']);
        }

        $data = new Resourceitem($recipe, new RecipeTransformer());

        $this->fractal->parseIncludes('components');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }

    /**
     * @param Request $request
     * @param integer $recipe_id
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function update(Request $request, $recipe_id)
    {
        $recipe = Recipe::with('components', 'for')
                        ->find($recipe_id);

        if ( !$recipe instanceof Recipe) {
            return $this->errorResponse(404, "Recipe not found", ['recipe_id']);
        }

        $item = Item::find($recipe->for->id);

        if ( !$item instanceof Item) {
            return $this->errorResponse(406, "Recipe does not belong to any item", ['recipe_id']);
        }

        $componentsToRemove = $request->get('components_remove'); //pivot table ids
        $componentsToAdd    = $request->get('components_add');    //item ids

        if (!empty($componentsToRemove) && is_array($componentsToRemove)) {
            foreach($componentsToRemove as $item_id) {
                DB::table('item_recipe')->where('item_id', $item_id)
                  ->where('recipe_id', $recipe_id)
                  ->delete();
            }
        }

        if (!empty($componentsToAdd) && is_array($componentsToAdd)) {
            foreach($componentsToAdd as $item_id) {
                try {
                    $recipe->components()->attach(Item::findOrFail($item_id));
                }
                catch(\Throwable $ex) {
                    return $this->errorResponse(409, "Component id {$item_id} does not exists", ['items']);
                }
            }
        }

        if (!empty($componentsToRemove)) {
            if (!$recipe->components->count()) {
                $recipe->delete();
            }
        }

        if (!(empty($componentsToRemove) && empty($componentsToAdd)) ) {
            $item->touch();
        }

        $data = new Resourceitem($recipe, new RecipeTransformer());

        $this->fractal->parseIncludes('components');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }
}