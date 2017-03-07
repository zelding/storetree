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
}