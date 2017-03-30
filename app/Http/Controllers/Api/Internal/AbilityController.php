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
use Illuminate\Http\Request;
use App\Utils\Transformers\SimpleItemTransformer;
use League\Fractal\Resource\Item as ResourceItem;
use League\Fractal\Resource\Collection as ResourceCollection;

class AbilityController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $abilities = Ability::with('items')->get();

        $data = new ResourceCollection($abilities, new AbilityTransformer());

        $this->fractal->parseIncludes('items');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            $abilities->count() ? 200 : 204,
            [],
            480
        );
    }

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
}
