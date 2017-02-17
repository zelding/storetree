<?php
/**
 * Created by PhpStorm.
 * User: Lyozsi
 * Date: 2017. 02. 14.
 * Time: 22:36
 */

namespace App\Http\Controllers;
use App\Http\Requests\StoreItem;
use App\Item;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class BuildController extends Controller
{
    public function index()
    {
        $items = Item::with('components')
            ->where('is_recipe', 0)
            ->where('is_consumable', 0)
            ->get();

        return view('build/index', [
            'items' => $items
        ]);
    }

    public function show($id)
    {
        $item = Item::find($id);

        return view("build/item", [
            'item' => $item
        ]);
    }

    public function listRelated($id)
    {
        $item = Item::with('components', 'buildsInto')
            ->find($id);

        return [];
    }
}