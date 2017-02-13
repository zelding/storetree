<?php

namespace App\Http\Controllers;

use App\Item;
use App\Shop;
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
        $numberOfItems = Item::where('is_recipe', 0)->count();
        $numberOfShops = Shop::count();

        return view(
            'home',
            [
                'numberOfItems' => $numberOfItems,
                'numberOfShops' => $numberOfShops
            ]
        );
    }
}
