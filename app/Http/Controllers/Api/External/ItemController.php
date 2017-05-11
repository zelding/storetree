<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/27/17 4:41 PM
 */

namespace App\Http\Controllers\Api\External;

use App\Service\ItemService;
use Illuminate\Http\Request;

use App\Item;
use App\Utils\Transformers\ItemTransformer;
use App\Utils\Transformers\SimpleItemTransformer;
use App\Http\Requests\StoreItem;

use League\Fractal\Resource\Item as ResourceItem;
use League\Fractal\Resource\Collection as ResourceCollection;

class ItemController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $item = Item::pager($request)->get();

        if( $request->get('simple') ) {
            $data = new ResourceCollection($item, new SimpleItemTransformer());
        }
        else {
            $data = new ResourceCollection($item, new ItemTransformer());
        }

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            $item->count() ? 200 : 204,
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
    public function show(Request $request, $dota_id)
    {
        $item = Item::whereDotaId($dota_id)->first();

        if ( !$item instanceof Item) {
            return $this->errorResponse(404, "Item not found", ['dota_id']);
        }

        if( $request->get('simple') ) {
            $data = new ResourceItem($item, new SimpleItemTransformer());
        }
        else {
            $data = new ResourceItem($item, new ItemTransformer());
        }

        $this->fractal->parseIncludes('recipes.components');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }

    /**
     * @param StoreItem $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreItem $request)
    {
        $item = new Item();
        $item = app(ItemService::class)->setItemAttributes($item, $request);

        $item->save();

        $data = new ResourceItem($item, new ItemTransformer());

        return response()->json($this->fractal->createData($data)->toArray(), 201);
    }

    /**
     * @param StoreItem $request
     * @param integer   $dota_id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(StoreItem $request, $dota_id)
    {
        $item = Item::whereDotaId($dota_id)->first();

        if ( !$item instanceof Item) {
            return $this->errorResponse(404, "Item not found", ['dota_id']);
        }

        $item = app(ItemService::class)->setPresentItemAttributes($item, $request);

        $item->save();

        $data = new ResourceItem($item, new ItemTransformer());

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }
}