<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItem;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::with('components')
            ->where('is_recipe', 0)
            ->orderBy('is_base_item', 'desc')
            ->orderBy('name', 'asc')
            ->get();

        return view('Item/index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('Item/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreItem  $request
     * @return \Illuminate\Http\Response
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

        if ( !$item->is_boss_item ) {
            $item->shops()->attach(1);
        }

        return redirect(route('items.index'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
