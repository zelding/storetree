<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/27/17 4:41 PM
 */

namespace App\Http\Controllers\Api\Internal;
use App\Service\ItemService;
use Illuminate\Http\Request;

use App\Item;
use App\Utils\Transformers\ItemTransformer;
use App\Utils\Transformers\SimpleItemTransformer;
use App\Utils\BaseSerializer;
use App\Http\Requests\StoreItem;

use League\Fractal\Manager;
use League\Fractal\Resource\Item as ResourceItem;
use League\Fractal\Resource\Collection as ResourceCollection;

class ItemController
{
    public function index(Request $request)
    {
        $item = Item::all();

        $manager = new Manager();
        $manager->setSerializer(new BaseSerializer());

        if( $request->get('simple') ) {
            $data = new ResourceCollection($item, new SimpleItemTransformer());
        }
        else {
            $data = new ResourceCollection($item, new ItemTransformer());
        }

        //$manager->parseIncludes('recipes.components');

        return response()->json(
            $manager->createData($data)->toArray(),
            $item->count() ? 200 : 204,
            [],
            480
        );
    }

    public function show(Request $request, $dota_id)
    {
        $item = Item::whereDotaId($dota_id)->first();

        $manager = new Manager();
        $manager->setSerializer(new BaseSerializer());

        if( $request->get('simple') ) {
            $data = new ResourceItem($item, new SimpleItemTransformer());
        }
        else {
            $data = new ResourceItem($item, new ItemTransformer());
        }

        $manager->parseIncludes('recipes.components');

        return response()->json(
            $manager->createData($data)->toArray(),
            200,
            [],
            480
        );
    }

    public function store(StoreItem $request)
    {
        $item = new Item();

        $item = app(ItemService::class)->setItemAttributes($item, $request);

        $item->save();

        $manager = new Manager();
        $manager->setSerializer(new BaseSerializer());
        $data = new ResourceItem($item, new ItemTransformer());

        return response()->json($manager->createData($data)->toArray(), 201);
    }
}