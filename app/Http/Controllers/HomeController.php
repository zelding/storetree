<?php

namespace App\Http\Controllers;

use App\Ability;
use App\Item;
use App\ItemLocale;
use App\Shop;
use App\Stat;
use App\Utils\Constants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transCount    = [];
        $numberOfItems = Item::count();
        $numberOfShops = Shop::count();
        $stats         = Stat::count();
        $baseItems     = Item::where('is_base_item',1 )->count();
        $bossItems     = Item::where('is_boss_item', 1)->count();
        $recipes       = Item::where('is_recipe', 1)->count();
        $consumables   = Item::where('is_consumable', 1)->count();
        $abilities     = Ability::count();
        $itemTrans     = DB::table('item_locale')->selectRaw('COUNT(id) AS count, language_id')
            ->groupBy('language_id')->get();

        foreach( $itemTrans as $trans ) {
            $transCount[ $trans->language_id ] = [
                'name'  => Constants::$languages[ $trans->language_id ],
                'count' => $trans->count
            ];
        }

        return view(
            'home',
            [
                'numberOfItems' => $numberOfItems,
                'numberOfShops' => $numberOfShops,
                'baseItems'     => $baseItems,
                'bossItems'     => $bossItems,
                'recipes'       => $recipes,
                'consumables'   => $consumables,
                'stats'         => $stats,
                'languages'     => $transCount,
                'abilities'     => $abilities
            ]
        );
    }
}
