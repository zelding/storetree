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
        $items = Item::with('recipes.components', 'usedInRecipes.for')
            ->where('is_recipe', 0)
            ->where('is_consumable', 0)
            ->orderBy('name')
            ->get();

        return view('build/index', [
            'items' => $items
        ]);
    }

    public function show($id)
    {
        $item = Item::with('recipes.components', 'usedInRecipes.for')
            ->find($id);

        $buildsInto = [];
        $components = [];

        foreach($item->recipes->first as $component) {
            $components[] = $component->id;
        }

        foreach($item->usedInRecipes as $component) {
            $buildsInto[] = $component->for->id;
        }

        return view("build/item", [
            'item' => $item,
            'components' => !empty($components) ? implode(',', $components) : "",
            'buildsInto' => !empty($buildsInto) ? implode(',', $buildsInto) : ""
        ]);
    }

    public function listRelated($id)
    {
        $item = Item::with('components', 'buildsInto')
            ->find($id);
    }
}