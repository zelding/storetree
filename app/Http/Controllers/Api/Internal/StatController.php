<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/30/17 9:44 AM
 */

namespace App\Http\Controllers\Api\Internal;

use App\Stat;
use App\Item;
use App\Service\ItemService;
use App\Http\Requests\StoreStat;
use App\Http\Requests\StoreItemStat;
use App\Utils\Transformers\StatTransformer;
use App\Utils\Transformers\SimpleItemTransformer;
use League\Fractal\Resource\Item as ResourceItem;
use Illuminate\Http\Request;

class StatController extends Controller
{
    /**
     * @param StoreStat $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreStat $request)
    {
        $stat = new Stat();
        $stat->name       = $request->get('name');
        $stat->dota_name  = $request->get('dota_name');
        $stat->var_type   = $request->get("var_type");
        $stat->stat_group = $request->get('stat_group') ?? null;
        $stat->var_name   = $request->get('var_name') ?? null;
        $stat->stat_group = $request->get('stat_group') ?? null;
        $stat->is_percent  = $request->get('is_percent') ?? false;

        $stat->save();

        $data = new ResourceItem($stat, new StatTransformer());

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            201,
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
    public function showItemStats(Request $request, $dota_id)
    {
        $item = Item::with('stats')
                    ->where('dota_id', $dota_id)
                    ->first();

        if ( !$item instanceof Item) {
            return $this->errorResponse(404, "Item not found", ['dota_id']);
        }

        app(ItemService::class)->resolveItemInheritedStats($item);

        $data = new ResourceItem($item, new SimpleItemTransformer());

        $this->fractal->parseIncludes('stats');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }

    /**
     * @param StoreItemStat $request
     * @param integer       $dota_id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateItemStat(StoreItemStat $request, $dota_id)
    {
        $item = Item::with('stats')
                    ->where('dota_id', $dota_id)
                    ->first();

        if ( !$item instanceof Item) {
            return $this->errorResponse(404, "Item not found", ['dota_id']);
        }

        $statValues = $request->get('new_stat_value') ?? [];

        if ( $request->get('new_stat') && !empty($statValues) ) {
            //the number of stats must be either one or the max_level of the item
            if ( !(count($statValues) == 1 || count($statValues) == $item->max_level) ) {
                $error = "The number of stats must be either 1 or {$item->max_level}! You gave ".count($statValues);

                return response()->json([
                    'code' => 409,
                    'message' => $error,
                    'fields' => ['value']
                ],
                409,
                [],
                480
                );
            }

            sort($statValues, SORT_NUMERIC);

            $item->stats()->attach([
                $request->get('new_stat') => ['value' => json_encode($statValues)]
            ]);
        }

        if ( !empty($request->get('remove_stat')) ) {
            foreach( $request->get('remove_stat') as $statId ) {
                $stat = Stat::findOrFail($statId);

                $item->stats()->detach($stat);
            }
        }

        $item->touch();

        app(ItemService::class)->resolveItemInheritedStats($item);

        $data = new ResourceItem($item, new SimpleItemTransformer());

        $this->fractal->parseIncludes('stats');

        return response()->json(
            $this->fractal->createData($data)->toArray(),
            200,
            [],
            480
        );
    }
}