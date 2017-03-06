<?php

namespace App\Http\Controllers;

use App\Ability;
use App\Http\Requests\StoreItem;
use App\Http\Requests\StoreItemStat;
use App\Http\Requests\StoreItemTranslation;
use App\Item;
use App\ItemLocale;
use App\Recipe;
use App\Shop;
use App\Stat;
use App\Utils\Constants;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use App\Service\ItemService;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * asd
     * @return View
     */
    public function index(Request $request)
    {
        $query = Item::with('recipes', 'shops', 'locale');

        if ( !$request->has('all') ) {
            $query->where('is_recipe', 0);
        }

        $items = $query->orderBy('is_base_item', 'desc')
            ->orderBy('name', 'asc')
            ->get();

        $shops = Shop::all();

        return view('Item/index', [
            'items' => $items,
            'shops' => $shops,
            'langs' => Constants::$languages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return View
     */
    public function create(Request $request)
    {
        $shops = Shop::all();
        $item = null;

        //if it comes from a copy route
        if ( Session::exists('item') ) {
            $item = Item::findOrFail(Session::get('item')->id);
            Session::remove('item');
        }

        return view('Item/create', [
            'item'          => $item,
            'shops'         => $shops,
            'request'       => $request->old(),
            'currentShops'  => [],
            'qualityLevels' => Constants::$itemQuality,
            'shareFlags'    => Constants::$shareable
        ]);
    }

    public function copy($id)
    {
        $item = Item::findOrFail($id);

        return redirect(route('items.create'))->with('item', $item);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreItem  $request
     * @return RedirectResponse
     */
    public function store(StoreItem $request)
    {
        $item = new Item();
        $item->name          = $request->get('name');
        $item->description   = $request->get('description');
        $item->cost          = $request->get('cost') ?? 0;
        $item->is_base_item  = $request->get('base_item') ?? 0;
        $item->is_boss_item  = $request->get('boss_item') ?? 0;
        $item->is_consumable = $request->get('consumable_item') ?? 0;
        $item->is_recipe     = $request->get('recipe_item') ?? 0;

        $item->dota_id       = $request->get('dota_id');
        $item->base_class    = $request->get('base_class');
        $item->base_level    = $request->get('base_level') ?? 1;
        $item->max_level     = $request->get('max_level') ?? 1;
        $item->stack_size    = $request->get('stack_size') ?? 1;
        $item->start_charges = $request->get('start_charges') ?? 0;
        $item->alert_text    = $request->get('alert_text');
        $item->model         = $request->get('model');
        $item->fight_recap   = $request->get('fight_recap') ?? 0;
        $item->quality       = $request->get('quality');
        $item->share         = $request->get('share');
        $item->is_killable   = $request->get('is_killable') ?? 0;
        $item->is_sellable   = $request->get('is_sellable') ?? 0;
        $item->is_droppable  = $request->get('is_droppable') ?? 0;
        $item->in_backpack   = $request->get('is_backpackable') ?? 0;
        $item->is_permanent  = $request->get('is_permanent') ?? 0;
        $item->needs_charges = $request->get('needs_charges') ?? 0;
        $item->show_charges  = $request->get('show_charges') ?? 0;
        $item->is_alertable  = $request->get('is_alertable') ?? 0;
        $item->is_autocast   = $request->get('is_autocast') ?? 0;


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
     * @return RedirectResponse|View
     */
    public function show($id)
    {
        $item = Item::with('shops','recipes.components', 'usedInRecipes.for', 'stats', 'ability')->findOrFail($id);

        app(ItemService::class)->resolveItemInheritedStats($item);

        return view('Item/view', [
            "item"  => $item,
            'langs' => Constants::$languages,
            'stringArrays' => Constants::$stringArrays
        ]);
    }

    /**
     * @param int $id
     * @return RedirectResponse|Response|Redirector
     */
    public function showScript($id)
    {
        $item = Item::with('shops','recipes.components', 'usedInRecipes.for', 'stats', 'ability')->find($id);

        if ( !($item instanceof Item)) {
            return redirect(route('items.index'), 404);
        }

        app(ItemService::class)->resolveItemInheritedStats($item);

        $response = new Response();
        $response->setContent(View::make('templates/previews/item', [
            'item'   => $item,
            'ability' => $item->ability->first()
        ]));

        return $response;
    }

    /**
     * Shows the texts generated for tooltips
     *
     * encoded in UTF-16
     *
     * @param int $id
     * @param int $langId
     * @return RedirectResponse|Response|Redirector
     */
    public function showTooltip($id, $lang = 1)
    {
        $item = Item::with('stats', 'locale')->find($id);

        if ( !($item instanceof Item)) {
            return redirect(route('items.index'), 404);
        }

        $locale = $item->locale->first(function ($value, $key) use ($lang) {
            /** @var ItemLocale $value */
            return $value->language_id ==  $lang;
        });

        app(ItemService::class)->resolveItemInheritedStats($item);

        $response = new Response();
        $response->setContent(View::make('templates/previews/tooltip', [
            'item'   => $item,
            'locale' => $locale
        ]));

        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request $request
     * @param  int     $id
     * @return View
     */
    public function edit(Request $request, $id)
    {
        $item  = Item::with('shops', 'recipes.components')->find($id);

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
            "request"       => $request,
            "shops"         => $shops,
            "item"          => $item,
            'currentShops'  => $currentShops,
            'qualityLevels' => Constants::$itemQuality,
            'shareFlags'    => Constants::$shareable
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreItem  $request
     * @param  int  $id
     * @return View|RedirectResponse
     */
    public function update(StoreItem $request, $id)
    {
        $item  = Item::find($id);

        $item->name          = $request->get('name');
        $item->description   = $request->get('description');
        $item->cost          = $request->get('cost') ?? 0;
        $item->is_base_item  = $request->get('base_item') ?? 0;
        $item->is_boss_item  = $request->get('boss_item') ?? 0;
        $item->is_consumable = $request->get('consumable_item') ?? 0;
        $item->is_recipe     = $request->get('recipe_item') ?? 0;

        $item->dota_id       = $request->get('dota_id');
        $item->base_class    = $request->get('base_class');
        $item->base_level    = $request->get('base_level') ?? 1;
        $item->max_level     = $request->get('max_level') ?? 1;
        $item->stack_size    = $request->get('stack_size') ?? 1;
        $item->start_charges = $request->get('start_charges') ?? 0;
        $item->alert_text    = $request->get('alert_text');
        $item->model         = $request->get('model');
        $item->fight_recap   = $request->get('fight_recap') ?? 0;
        $item->quality       = $request->get('quality');
        $item->share         = $request->get('share');
        $item->is_killable   = $request->get('is_killable') ?? 0;
        $item->is_sellable   = $request->get('is_sellable') ?? 0;
        $item->is_droppable  = $request->get('is_droppable') ?? 0;
        $item->in_backpack   = $request->get('is_backpackable') ?? 0;
        $item->is_permanent  = $request->get('is_permanent') ?? 0;
        $item->needs_charges = $request->get('needs_charges') ?? 0;
        $item->show_charges  = $request->get('show_charges') ?? 0;
        $item->is_alertable  = $request->get('is_alertable') ?? 0;
        $item->is_autocast   = $request->get('is_autocast') ?? 0;


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

        return redirect(route('items.edit', ["id" => $item->id]))->with('success', 'Item updated');
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
     * @return RedirectResponse|View
     */
    public function editComponent(Request $request, $id)
    {
        $item  = Item::with('recipes.components')->find($id);
        $items = Item::whereNotIn('id', [$id])
                     ->orderBy('name')
                     ->get();

        if ( !($item instanceof Item)) {
            return redirect(route('items.index'), 404);
        }

        return view('Item/edit_components', [
            "item"  => $item,
            'items' => $items,
            'request' => $request->old()
        ]);
    }

    /**
     * @param Request $request
     * @param int     $id
     * @return RedirectResponse
     */
    public function updateComponent(Request $request, $id)
    {
        $item = Item::find($id);

        $componentsToRemove = $request->get('components_remove'); //pivot table ids
        $componentsToAdd    = $request->get('components_add');    //item ids

        if (!empty($componentsToRemove)) {
            foreach($componentsToRemove as $r_id => $items) {
                if ( !empty($items) )
                    DB::table('item_recipe')->whereIn('item_id', $items)
                        ->where('recipe_id', $r_id)
                        ->delete();

            }
        }

        if (!empty($componentsToAdd)) {
            foreach($componentsToAdd as $r_id => $items) {

                if ( !empty($items) ) {
                    $recipe = Recipe::find($r_id);

                    if ( !($recipe instanceof Recipe) ) {
                        $recipe = new Recipe();
                        $recipe->item_id = $item->id;
                        $recipe->save();

                        $item->recipes()->save($recipe);
                    }

                    foreach($items as $i_id) {

                        $recipe->components()->attach(Item::findOrFail($i_id));
                    }
                }
            }
        }

        $item->touch();

        return redirect(route('items.edit.components', ["id" => $item->id]))->withInput();
    }

    /******************************************************
     *                     STATS
     ******************************************************/

    /**
     * @param Request $request
     * @param int     $id
     *
     * @return View
     */
    public function editStats(Request $request, $id)
    {
        $item  = Item::with('stats', 'recipes')->find($id);
        $componentStats = [];
        $primaryRecipe = $item->recipes()->first();

        if ( $primaryRecipe instanceof Recipe ) {
            $components = $primaryRecipe->components;

            if ( $components->count() ) {
                //go through stats
                //collect new ones
                foreach( $components as $component ) {
                    $component->load('stats');

                    foreach( $component->stats as $stat) {
                        if ( !array_key_exists($stat->id, $componentStats) ) {
                            $componentStats[ $stat->id ] = $stat;
                        }
                    }
                }
            }
        }

        app(ItemService::class)->resolveItemInheritedStats($item);

        //remove used and inherited stats
        foreach( $item->stats as $stat ) {
            if ( array_key_exists($stat->id, $componentStats) ) {
                unset($componentStats[$stat->id ]);
            }
        }

        $usedStatsId = array_map(function ($s) {
            return $s->id;
        }, $item->stats->all());

        $stats = Stat::whereNotIn('id',$usedStatsId)->get();

        return view('Item/edit_stats', [
            'item'           => $item,
            'stats'          => $stats,
            'componentStats' => $componentStats
        ]);
    }

    /**
     * @param StoreItemStat $request
     * @param integer       $id
     * @return RedirectResponse
     */
    public function updateStats(StoreItemStat $request, $id)
    {
        $item = Item::findOrFail($id);
        $error = "";
        $statValues = $request->get('new_stat_value') ?? [];

        if ( $request->get('new_stat') && !empty($statValues) ) {
            //the number of stats must be either one or the max_level of the item
            if ( !(count($statValues) == 1 || count($statValues) == $item->max_level) ) {
                $error = "The number of stats must be either 1 or {$item->max_level}! You gave ".count($statValues);

                return redirect(route('items.edit.stats', ["id" => $item->id]))->withErrors($error);
            }

            sort($statValues, SORT_NUMERIC);

            $item->stats()->attach([
                $request->get('new_stat') => ['value' => json_encode($statValues)]
            ]);
        }

        if ( !empty($request->get('remove_stat')) ) {
            foreach( $request->get('remove_stat') as $statId ) {
                $stat = Stat::findOrFail($statId);

                $item->stats()->detach($stat);
            }
        }

        $item->touch();

        if ( !empty($request->get('remove_stat')) || $request->get('new_stat') ) {
            return redirect(route('items.edit.stats', ["id" => $item->id]))->with('success', 'Update Successful');
        }

        return redirect(route('items.edit.stats', ["id" => $item->id]))->with('warning', 'Nothing has changed');
    }

    /********************************************************
     *                 TRANSLATIONS
     ********************************************************/

    /**
     * @param int $id
     * @return View
     */
    public function editTranslations($id)
    {
        $item = Item::with('locale', 'stats')->find($id);
        $unused = Constants::$languages;

        app(ItemService::class)->resolveItemInheritedStats($item);

        foreach($item->locale as $locale) {
            unset($unused[ $locale->language_id ]);;
        }

        return view('Item/edit_translations', [
            'item'   => $item,
            'langs'  => Constants::$languages,
            'unused' => $unused
        ]);
    }

    /**
     * @param StoreItemTranslation $request
     * @param int $id
     * @return RedirectResponse
     */
    public function updateTranslations(StoreItemTranslation $request, $id)
    {
        $item = Item::with('locale')->findOrFail($id);

        $names        = $request->get('name');
        $descriptions = $request->get('description');
        $notes        = $request->get('note');
        $lores        = $request->get('lore');

        $names = array_filter($names);
        $keys  = array_keys($names);

        foreach ($keys as $i => $key) {
            $locale = ItemLocale::where('item_id', $item->id)
                ->where('language_id', $key)->first();

            if ( !($locale instanceof ItemLocale) ) {
                $locale = new ItemLocale();
                $locale->item_id     = $item->id;
                $locale->language_id = $key;
            }

            $locale->name        = $names[ $key ];
            $locale->description = $descriptions[ $key ];
            $locale->lore        = $lores[ $key ] ?? "";
            $locale->note        = $notes[ $key ] ?? "";
            $locale->save();
        }

        return redirect(route('items.edit.translations', ["id" => $id]))->with('success', "Updated");
    }

    /********************************************************
     *                    ABILITIES
     ********************************************************/

    /**
     * @param int $id
     *
     * @return View
     */
    public function editAbilities($id)
    {
        $item      = Item::with('ability')->findOrFail($id);
        $abilities = Ability::all();

        return view('Item/edit_ability', [
            'item'      => $item,
            'abilities' => $abilities
        ]);
    }

    /**
     * @param Request $request
     * @param int     $id
     *
     * @return RedirectResponse
     */
    public function updateAbilities(Request $request, $id)
    {
        $msg = "";
        $item = Item::with('ability')->findOrFail($id);

        if ( $request->get('ability_id') ) {
            $abilityToAdd = Ability::findOrFail($request->get('ability_id'));

            $item->ability()->attach($abilityToAdd);
            $msg = "Added";
        }

        if ( $abIds = $request->get('remove_ability') ) {
            foreach( $abIds as $id ) {
                $item->ability()->detach($id);
            }

            $msg = "Removed";
        }

        return redirect(route('items.edit.abilities', ['id' => $id]))->with('success', $msg);
    }
}
