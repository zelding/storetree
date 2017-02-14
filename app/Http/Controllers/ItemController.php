<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItem;
use App\Item;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * return Response
     */
    public function index()
    {
        $items = Item::with('components', 'shops')
            ->where('is_recipe', 0)
            ->orderBy('is_base_item', 'desc')
            ->orderBy('name', 'asc')
            ->get();

        $shops = Shop::all();

        return view('Item/index', [
            'items' => $items,
            'shops' => $shops
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $shops = Shop::all();
        return view('Item/create', ['shops' => $shops]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreItem  $request
     * @return Response
     */
    public function store(StoreItem $request)
    {
        $item = new Item();
        $item->name          = $request->get('name');
        $item->description   = $request->get('description');
        $item->cost          = $request->get('cost');
        $item->is_base_item  = $request->get('base_item') ?? 0;
        $item->is_boss_item  = $request->get('boss_item') ?? 0;
        $item->is_consumable = $request->get('consumable_item') ?? 0;
        $item->is_recipe     = $request->get('recipe_item') ?? 0;
        $item->save();

        $shops = $request->get('item_shops');

        if ( empty($shops) ) {
            if (!$item->is_boss_item) {
                $item->shops()->attach(1);
            }
        }
        else {
            foreach ($shops as $shop_id) {
                $item->shops()->attach($shop_id);
            }
        }

        return redirect(route('items.show', ['id' => $item->id]), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response|RedirectResponse
     */
    public function show($id)
    {
        $item = Item::with('shops','components', 'buildsInto')->find($id);

        if ( !($item instanceof Item)) {
            return redirect(route('items.index'), 404);
        }

        return view('Item/view', [
            "item" => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        $item  = Item::find($id);
        $shops = Shop::all();

        $currentShops = [];

        if ( !empty($item->shops) ) {
            foreach ($item->shops as $shop) {
                $currentShops[] = $shop->id;
            }
        }

        return view('Item/view', [
            "request"      => $request,
            "item"         => $item,
            'shops'        => $shops,
            'currentShops' => $currentShops
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreItem  $request
     * @param  int  $id
     * @return Response
     */
    public function update(StoreItem $request, $id)
    {
        $item  = Item::find($id);

        $item->name          = $request->get('name');
        $item->description   = $request->get('description');
        $item->cost          = $request->get('cost');
        $item->is_base_item  = $request->get('base_item') ?? 0;
        $item->is_boss_item  = $request->get('boss_item') ?? 0;
        $item->is_consumable = $request->get('consumable_item') ?? 0;
        $item->is_recipe     = $request->get('recipe_item') ?? 0;
        $item->save();

        $newShops = $request->get('item_shops');
        $currentShops = [];

        if ( !empty($item->shops) ) {
            foreach ($item->shops as $shop) {

                $currentShops[] = $shop->id;
            }

            $item->shops()->detach($currentShops);
        }

        if ( !empty($newShops) ) {
            $item->shops()->attach($newShops);
        }

        return redirect(route('items.edit', ["id" => $item->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return redirect(route('items.index'), 204);
    }
}
