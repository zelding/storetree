<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/3/17 6:28 PM
 */

namespace App\Service;
use App\Item;
use App\Utils\Constants;
use Illuminate\Http\Request;

class ItemService
{
    /**
     * Resolves inherited stats for the item
     *
     * @param Item $item
     */
    public function resolveItemInheritedStats(Item &$item)
    {
        if ( $item->base_level > 1 ) {
            //remove the _# from the name
            $name = preg_replace('~_\d{1,}~', '', $item->base_class);

            $lvl1 = Item::with('stats')
                        ->where('base_level', '=', 1)
                        ->where('base_class', $name)
                        ->first();

            if ( $lvl1 instanceof Item && $lvl1->stats->count() ) {
                $lvl1->stats->each(function (&$item, $key) {
                    $item->inherited = true;
                });

                foreach ($lvl1->stats as $stat) {
                    $contains = $item->stats->contains(function ($value, $key) use ($stat) {
                        return $value->id == $stat->id;
                    });

                    if ( !$contains ) {
                        $item->stats->add($stat);
                    }
                }
            }
        }
    }

    /**
     * Sets/Updates item properties from request
     *
     * @param Item $item
     * @param Request $request
     * @return Item
     */
    public function setItemAttributes(Item $item, Request $request)
    {
        $item->name          = $request->get('name');
        $item->description   = $request->get('description');
        $item->cost          = $request->get('cost') ?? 0;
        $item->is_base_item  = $request->get('base_item') ?? 0;
        $item->is_boss_item  = $request->get('boss_item') ?? 0;
        $item->is_consumable = $request->get('consumable_item') ?? 0;
        $item->is_recipe     = $request->get('recipe_item') ?? 0;
        $item->script        = $request->get('script') ?? null;
        $item->is_override   = $request->get('is_override') ?? 0;

        $item->dota_id       = $request->get('dota_id');
        $item->base_class    = $request->get('base_class');
        $item->base_level    = $request->get('base_level') ?? 1;
        $item->max_level     = $request->get('max_level') ?? 1;
        $item->stack_size    = $request->get('stack_size') ?? 1;
        $item->start_charges = $request->get('start_charges') ?? 0;
        $item->alert_text    = $request->get('alert_text') ?? null;
        $item->model         = $request->get('model');
        $item->fight_recap   = $request->get('fight_recap') ?? 0;
        $item->quality       = $request->get('quality') ?? Constants::$itemQuality[2];
        $item->share         = $request->get('share') ?? Constants::$shareable[0];
        $item->is_killable   = $request->get('is_killable') ?? 0;
        $item->is_sellable   = $request->get('is_sellable') ?? 0;
        $item->is_droppable  = $request->get('is_droppable') ?? 0;
        $item->in_backpack   = $request->get('is_backpackable') ?? 0;
        $item->is_permanent  = $request->get('is_permanent') ?? 0;
        $item->needs_charges = $request->get('needs_charges') ?? 0;
        $item->show_charges  = $request->get('show_charges') ?? 0;
        $item->is_alertable  = $request->get('is_alertable') ?? 0;
        $item->is_autocast   = $request->get('is_autocast') ?? 0;
        $item->shop_tags     = $request->get('shop_tags') ?? [];
        $item->stock_max     = $request->get('stock_max') ?? 0;
        $item->stock_initial = $request->get('stock_initial') ?? 0;
        $item->stock_time    = $request->get('stock_time') ?? 0;
        $item->aliases       = $request->get('aliases') ?? [];
        $item->disassemble   = $request->get('disassemble') ?? Constants::$disassemble[0];
        $item->declarations  = $request->get('declarations') ?? null;

        return $item;
    }
}