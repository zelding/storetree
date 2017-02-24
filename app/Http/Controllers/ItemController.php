<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItem;
use App\Item;
use App\Shop;
use App\Stat;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Item::with('components', 'shops');

        if ( !$request->has('all') ) {
            $query->where('is_recipe', 0);
        }

        $items = $query->orderBy('is_base_item', 'desc')
            ->orderBy('name', 'asc')
            ->get();

        $shops = Shop::all();

        return view('Item/index', [
            'items'    => $items,
            'shops'    => $shops
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $shops = Shop::all();
        return view('Item/create', [
            'shops'   => $shops,
            'request' => $request
        ]);
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
        $item = Item::with('shops','components', 'buildsInto', 'stats')->find($id);

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
     * @param  Request $request
     * @param  int     $id
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        $item  = Item::with('shops', 'components')->find($id);

        if ( !($item instanceof Item)) {
            return redirect(route('items.index'), 404);
        }

        $items = Item::whereNotIn('id', [$id])
            ->orderBy('name')
            ->get();
        $shops = Shop::all();

        $currentShops = [];

        if ( !empty($item->shops) ) {
            foreach ($item->shops as $shop) {
                $currentShops[] = $shop->id;
            }
        }

        return view('Item/edit', [
            "request"      => $request,
            "item"         => $item,
            "items"        => $items,
            'shops'        => $shops,
            'currentShops' => $currentShops
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreItem  $request
     * @param  int  $id
     * @return Response|RedirectResponse
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
     * @return Response|RedirectResponse
     */
    public function destroy($id)
    {
        if ( !Auth::check() ) {
            return response('Log in first!', 403);
        }

        $item = Item::find($id);
        $item->shops()->detach();
        if ( !$item->is_base_item ) {
            $item->components()->detach();
        }

        $item->delete();

        return redirect(route('items.index'), 301);
    }

    /******************************************************
     *                  COMPONENTS
     ******************************************************/

    /**
     * @param int $id ItemId
     *
     * @return RedirectResponse|Response
     */
    public function editComponent($id)
    {
        $item  = Item::with('components')->find($id);

        if ( !($item instanceof Item)) {
            return redirect(route('items.index'), 404);
        }

        return view('Item/edit_components', [
            "item" => $item,
        ]);
    }

    public function updateComponent(Request $request, $id)
    {
        $item = Item::find($id);

        $componentsToRemove = $request->get('components_remove'); //pivot table ids
        $componentsToAdd    = $request->get('components_add');    //item ids

        if (!empty($componentsToRemove)) {
            foreach($componentsToRemove as $c_id) {
                DB::table('recipes')->where('id', $c_id)->delete();
            }
        }

        if (!empty($componentsToAdd)) {
            foreach($componentsToAdd as $c_id) {
                $item->components()->attach($c_id);
            }
        }

        return redirect(route('items.edit', ["id" => $item->id]));
    }

    /******************************************************
     *                     STATS
     ******************************************************/

    /**
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function editStats(Request $request, $id)
    {
        $item = Item::with('stats')->find($id);
        $stats = Stat::all();

        return view('Item/edit_stats', [
            'item'  => $item,
            'stats' => $stats
        ]);
    }

    public function updateStats(Request $request, $id)
    {
        $item = Item::find($id);

        $item->stats()->attach([
            $request->get('new_stat') => ['value' => json_encode($request->get('new_stat_value'))]
        ]);

        return redirect(route('items.edit.stats', ["id" => $item->id]));
    }
}
