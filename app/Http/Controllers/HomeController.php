<?php

namespace App\Http\Controllers;

use App\Item;
use App\Shop;
use App\Stat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numberOfItems = Item::count();
        $numberOfShops = Shop::count();
        $stats         = Stat::count();
        $baseItems     = Item::where('is_base_item',1 )->count();
        $bossItems     = Item::where('is_boss_item', 1)->count();
        $recipes       = Item::where('is_recipe', 1)->count();
        $consumables   = Item::where('is_consumable', 1)->count();

        return view(
            'home',
            [
                'numberOfItems' => $numberOfItems,
                'numberOfShops' => $numberOfShops,
                'baseItems'     => $baseItems,
                'bossItems'     => $bossItems,
                'recipes'       => $recipes,
                'consumables'   => $consumables,
                'stats'         => $stats
            ]
        );
    }
}
