<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/30/17 2:48 PM
 */

namespace App\Http\Controllers\Api\Internal;

use App\Ability;
use App\Http\Requests\StoreAbility;
use App\Service\AbilityService;
use App\Utils\Transformers\AbilityTransformer;
use App\Item;
use App\Utils\Transformers\SimpleItemTransformer;
use Illuminate\Http\Request;
use League\Fractal\Resource\Item as ResourceItem;
use League\Fractal\Resource\Collection as ResourceCollection;

class AbilityController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $abilities = Ability::with('items')
            ->pager($request)
            ->get();

        $data = new ResourceCollection($abilities, new AbilityTransformer());

        $this->fractal->parseIncludes('items');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            $abilities->count() ? 200 : 204,
            [],
            480
        );
    }

    /**
     * @param StoreAbility $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(StoreAbility $request)
    {
        $ability = new Ability();

        $ability = app(AbilityService::class)->setAbilityAttributes($ability, $request);

        $ability->save();

        $data = new ResourceItem($ability, new AbilityTransformer());

        $this->fractal->parseIncludes('items');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            201,
            [],
            480
        );
    }

    /**
     * @param integer $ability_id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($ability_id)
    {
        $ability = Ability::with('items')->find($ability_id);

        if ( !$ability instanceof Ability) {
            return $this->errorResponse(404, "Ability not found", ['ability_id']);
        }

        $data = new ResourceItem($ability, new AbilityTransformer());

        $this->fractal->parseIncludes('items');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }

    /**
     * @param StoreAbility $request
     * @param integer      $ability_id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(StoreAbility $request, $ability_id)
    {
        $ability = Ability::with('items')->find($ability_id);

        if ( !$ability instanceof Ability) {
            return $this->errorResponse(404, "Ability not found", ['ability_id']);
        }

        $ability = app(AbilityService::class)->setPresentAbilityAttributes($ability, $request);

        $ability->save();

        $data = new ResourceItem($ability, new AbilityTransformer());

        $this->fractal->parseIncludes('items');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }

    /**
     * @param integer $dota_id
     * @param integer $ability_id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function attachToItem($dota_id, $ability_id)
    {
        $item = Item::with('ability')
                    ->whereDotaId($dota_id)
                    ->first();

        if ( !$item instanceof Item) {
            return $this->errorResponse(404, "Item not found", ['dota_id']);
        }

        if ( $item->ability instanceof Ability) {
            return $this->errorResponse(409, "Item already has an Ability", ['dota_id']);
        }

        $ability = Ability::with('items')->find($ability_id);

        if ( !$ability instanceof Ability) {
            return $this->errorResponse(404, "Ability not found", ['ability_id']);
        }

        $item->ability()->attach($ability);

        $data = new ResourceItem($item, new SimpleItemTransformer());

        $this->fractal->parseIncludes('ability');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }

    /**
     * @param integer $dota_id
     * @param integer $ability_id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function detachFromItem($dota_id, $ability_id)
    {
        $item = Item::with('ability')
                    ->whereDotaId($dota_id)
                    ->first();

        if ( !$item instanceof Item) {
            return $this->errorResponse(404, "Item not found", ['dota_id']);
        }

        if ( !$item->ability instanceof Ability) {
            return $this->errorResponse(409, "Item doesn't have an Ability", ['dota_id']);
        }

        $ability = Ability::with('items')->find($ability_id);

        if ( !$ability instanceof Ability) {
            return $this->errorResponse(404, "Ability not found", ['ability_id']);
        }

        if ( $item->ability->id !== $ability->id ) {
            return $this->errorResponse(409, "Ability doesn't belong to this item", ['ability_id']);
        }

        $item->ability()->detach($ability);

        $data = new ResourceItem($item, new SimpleItemTransformer());

        $this->fractal->parseIncludes('ability');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }
}
