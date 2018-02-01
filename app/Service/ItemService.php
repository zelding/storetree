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
use App\Utils\Constants;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ItemService
{
    public static $bossItems = [
        "item_reflex_core",
        "item_farming_core",
        "item_cheese",
        "item_aegis",
        "item_upgrade_core_4",
        "item_upgrade_core_3",
        "item_upgrade_core_2",
        "item_upgrade_core"
    ];

    /**
     * Resolves inherited stats for the item
     *
     * @param Item $item
     */
    public function resolveItemInheritedStats(Item &$item)
    {
        if ($item->base_level > 1) {
            //remove the _# from the name
            $name = preg_replace('~_\d{1,}~', '', $item->base_class);

            $lvl1 = Item::with(
                ['stats' => function ($query) {
                    /** @var Builder $query */
                    $query->orderBy('order', 'asc');
                }])
                        ->where('base_level', '=', 1)
                        ->where('base_class', $name)
                        ->first();

            if ($lvl1 instanceof Item && $lvl1->stats->count()) {
                $lvl1->stats->each(
                    function (&$item, $key) {
                        $item->inherited = true;
                    }
                );

                foreach ($lvl1->stats as $stat) {
                    $contains = $item->stats->contains(
                        function ($value, $key) use ($stat) {
                            return $value->id == $stat->id;
                        }
                    );

                    if (!$contains) {
                        $item->stats->add($stat);
                    }
                }
            }
        }
    }

    /**
     * Sets/Updates item properties from request
     *
     * @param Item    $item
     * @param Request $request
     *
     * @return Item
     */
    public function setItemAttributes(Item $item, Request $request): Item
    {
        $item->name                 = $request->get('name');
        $item->description          = $request->get('description');
        $item->cost                 = $request->get('cost', 0);
        $item->is_base_item         = $request->get('base_item', 0);
        $item->is_boss_item         = $request->get('boss_item', 0);
        $item->is_consumable        = $request->get('consumable_item', 0);
        $item->is_recipe            = $request->get('recipe_item', 0);
        $item->script               = $request->get('script', null);
        $item->is_override          = $request->get('is_override', 0);
        $item->dota_id              = $request->get('dota_id');
        $item->base_class           = $request->get('base_class');
        $item->base_level           = $request->get('base_level', 1);
        $item->max_level            = $request->get('max_level', 1);
        $item->stack_size           = $request->get('stack_size', 1);
        $item->start_charges        = $request->get('start_charges', 0);
        $item->alert_text           = $request->get('alert_text', null);
        $item->model                = $request->get('model');
        $item->fight_recap          = $request->get('fight_recap', 0);
        $item->quality              = $request->get('quality', Constants::$itemQuality[2]);
        $item->share                = $request->get('share', Constants::$shareable[0]);
        $item->is_killable          = $request->get('is_killable', 0) ?? 0;
        $item->is_sellable          = $request->get('is_sellable', 0) ?? 0;
        $item->is_droppable         = $request->get('is_droppable', 1) ?? 0;
        $item->in_backpack          = $request->get('is_backpackable', 1) ?? 0;
        $item->is_permanent         = $request->get('is_permanent', 1);
        $item->needs_charges        = $request->get('needs_charges', 0);
        $item->show_charges         = $request->get('show_charges', 0);
        $item->is_alertable         = $request->get('is_alertable', 0);
        $item->is_autocast          = $request->get('is_autocast', 0);
        $item->shop_tags            = $request->get('shop_tags', []);
        $item->stock_max            = $request->get('stock_max', 0);
        $item->stock_initial        = $request->get('stock_initial', 0);
        $item->stock_time           = $request->get('stock_time', 0);
        $item->aliases              = $request->get('aliases', []);
        $item->disassemble          = $request->get('disassemble', Constants::$disassemble[0]);
        $item->declarations         = $request->get('declarations', null);
        $item->is_tempest_cloneable = $request->get('is_tempest_cloneable', 1);
        $item->inc_net_on_drop      = $request->get('inc_net_on_drop', 1);
        $item->should_suggest       = $request->get('should_suggest', 0);
        $item->should_init_suggest  = $request->get('should_init_suggest', 0);
        $item->is_support_item      = $request->get('is_support_item', 0);
        $item->sound_pickup         = $request->get('sound_pickup', null);
        $item->sound_drop           = $request->get('sound_drop', null);
        $item->sound_drop_world     = $request->get('sound_drop_world', null);

        return $item;
    }

    /**
     * Sets/Updates item properties from request only if they are provided
     *
     * @param Item    $item
     * @param Request $request
     *
     * @return Item
     */
    public function setPresentItemAttributes(Item $item, Request $request)
    {
        if ($request->exists('name')) {
            $item->name = $request->get('name');
        }

        if ($request->exists('description')) {
            $item->description = $request->get('description');
        }

        if ($request->exists('cost')) {
            $item->cost = $request->get('cost');
        }

        if ($request->exists('base_item')) {
            $item->is_base_item = $request->get('base_item');
        }

        if ($request->exists('boss_item')) {
            $item->is_boss_item = $request->get('boss_item');
        }

        if ($request->exists('consumable_item')) {
            $item->is_consumable = $request->get('consumable_item');
        }

        if ($request->exists('recipe_item')) {
            $item->is_recipe = $request->get('recipe_item');
        }

        if ($request->exists('script')) {
            $item->script = $request->get('script');
        }

        if ($request->exists('is_override')) {
            $item->is_override = $request->get('is_override');
        }

        if ($request->exists('dota_id')) {
            $item->dota_id = $request->get('dota_id');
        }

        if ($request->exists('base_class')) {
            $item->base_class = $request->get('base_class');
        }

        if ($request->exists('base_level')) {
            $item->base_level = $request->get('base_level');
        }

        if ($request->exists('max_level')) {
            $item->max_level = $request->get('max_level');
        }

        if ($request->exists('stack_size')) {
            $item->stack_size = $request->get('stack_size');
        }

        if ($request->exists('start_charges')) {
            $item->start_charges = $request->get('start_charges');
        }

        if ($request->exists('alert_text')) {
            $item->alert_text = $request->get('alert_text');
        }

        if ($request->exists('model')) {
            $item->model = $request->get('model');
        }

        if ($request->exists('fight_recap')) {
            $item->fight_recap = $request->get('fight_recap');
        }

        if ($request->exists('quality')) {
            $item->quality = $request->get('quality');
        }

        if ($request->exists('share')) {
            $item->share = $request->get('share');
        }

        if ($request->exists('is_killable')) {
            $item->is_killable = $request->get('is_killable');
        }

        if ($request->exists('is_sellable')) {
            $item->is_sellable = $request->get('is_sellable');
        }

        if ($request->exists('is_droppable')) {
            $item->is_droppable = $request->get('is_droppable');
        }

        if ($request->exists('is_backpackable')) {
            $item->in_backpack = $request->get('is_backpackable');
        }

        if ($request->exists('is_permanent')) {
            $item->is_permanent = $request->get('is_permanent');
        }

        if ($request->exists('needs_charges')) {
            $item->needs_charges = $request->get('needs_charges');
        }

        if ($request->exists('show_charges')) {
            $item->show_charges = $request->get('show_charges');
        }

        if ($request->exists('is_alertable')) {
            $item->is_alertable = $request->get('is_alertable');
        }

        if ($request->exists('is_autocast')) {
            $item->is_autocast = $request->get('is_autocast');
        }

        if ($request->exists('shop_tags')) {
            $item->shop_tags = $request->get('shop_tags');
        }

        if ($request->exists('stock_max')) {
            $item->stock_max = $request->get('stock_max');
        }

        if ($request->exists('stock_initial')) {
            $item->stock_initial = $request->get('stock_initial');
        }

        if ($request->exists('stock_time')) {
            $item->stock_time = $request->get('stock_time');
        }

        if ($request->exists('aliases')) {
            $item->aliases = $request->get('aliases');
        }

        if ($request->exists('disassemble')) {
            $item->disassemble = $request->get('disassemble');
        }

        if ($request->exists('declarations')) {
            $item->declarations = $request->get('declarations');
        }

        if ($request->exists('is_tempest_cloneable')) {
            $item->is_tempest_cloneable = $request->get('is_tempest_cloneable');
        }

        if ($request->exists('inc_net_on_drop')) {
            $item->inc_net_on_drop = $request->get('inc_net_on_drop');
        }

        if ($request->exists('should_suggest')) {
            $item->should_suggest = $request->get('should_suggest');
        }

        if ($request->exists('should_init_suggest')) {
            $item->should_init_suggest = $request->get('should_init_suggest');
        }

        if ($request->exists('is_support_item')) {
            $item->is_support_item = $request->get('is_support_item');
        }

        if ($request->exists('sound_pickup')) {
            $item->sound_pickup = $request->get('sound_pickup');
        }

        if ($request->exists('sound_drop')) {
            $item->sound_drop = $request->get('sound_drop');
        }

        if ($request->exists('sound_drop_world')) {
            $item->sound_drop_world = $request->get('sound_drop_world');
        }

        return $item;
    }

    /**
     * @param Item $item
     *
     * @return $this
     */
    public function setDefaults(Item &$item)
    {
        $item->cost                 = 0;
        $item->is_base_item         = 0;
        $item->is_boss_item         = 0;
        $item->is_consumable        = 0;
        $item->is_recipe            = 0;
        $item->script               = null;
        $item->is_override          = 0;
        $item->base_level           = 1;
        $item->max_level            = 1;
        $item->stack_size           = 1;
        $item->start_charges        = 0;
        $item->alert_text           = null;
        $item->fight_recap          = 0;
        $item->quality              = Constants::$itemQuality[2];
        $item->share                = Constants::$shareable[0];
        $item->is_killable          = 1;
        $item->is_sellable          = 1;
        $item->is_droppable         = 1;
        $item->in_backpack          = 1;
        $item->is_permanent         = 0;
        $item->needs_charges        = 0;
        $item->show_charges         = 0;
        $item->is_alertable         = 1;
        $item->is_autocast          = 0;
        $item->shop_tags            = [];
        $item->stock_max            = 0;
        $item->stock_initial        = 0;
        $item->stock_time           = 0;
        $item->aliases              = [];
        $item->disassemble          = Constants::$disassemble[0];
        $item->declarations         = null;
        $item->is_tempest_cloneable = 1;
        $item->inc_net_on_drop      = 1;
        $item->should_suggest       = 0;
        $item->should_init_suggest  = 0;
        $item->is_support_item      = 0;
        $item->sound_pickup         = null;
        $item->sound_drop           = null;
        $item->sound_drop_world     = null;

        return $this;
    }

    /**
     * Sets/Updates item properties from request only if they are provided
     *
     * @param Item       $item
     * @param Collection $data
     *
     * @return $this
     */
    public function setPresentItemAttributesFromImport(Item &$item, Collection $data)
    {
        if ($data->has('ID')) {
            $item->dota_id = $data->get('ID') ?? 0;
        }

        if ($data->has('ItemCost')) {
            $item->cost = $data->get('ItemCost') ?? 0;
        }

        if ($data->has('ScriptFile')) {
            $item->script = $data->get('ScriptFile') ?? null;
        }

        if ($data->has('ItemBaseLevel')) {
            $item->base_level = $data->get('ItemBaseLevel') ?? 1;
        }
        else { //try to resolve the base_level from the base_class (last digit)
            $c = [];
            preg_match("~_\d{1}$~", $item->base_class, $c);

            if (!empty($c)) {
                $level = reset($c);

                if (is_numeric($level)) {
                    $item->base_level = (int) $level;
                }
            }
        }

        if ($data->has('MaxUpgradeLevel')) {
            $item->max_level = $data->get('MaxUpgradeLevel') ?? 1;
        }

        if ($data->has('ItemStackable')) {
            $item->stack_size = $data->get('ItemStackable') ?? 1;
        }

        if ($data->has('Model')) {
            $item->model = $data->get('Model');
        }

        if ($data->has('FightRecapLevel')) {
            $item->fight_recap = $data->get('FightRecapLevel') ?? 0;
        }

        if ($data->has('ItemQuality')) {
            $item->quality = $data->get('ItemQuality') ?? Constants::$itemQuality[2];
        }

        if ($data->has('ItemShareability')) {
            $item->share = $data->get('ItemShareability') ?? Constants::$shareable[0];
        }

        if ($data->has('ItemKillable')) {
            $item->is_killable = $data->get('ItemKillable') ?? 0;
        }

        if ($data->has('ItemSellable')) {
            $item->is_sellable = $data->get('ItemSellable') ?? 0;
        }

        if ($data->has('ItemDroppable')) {
            $item->is_droppable = $data->get('ItemDroppable') ?? 0;
        }

        if ($data->has('AllowedInBackpack')) {
            $item->in_backpack = $data->get('AllowedInBackpack') ?? 0;
        }

        if ($data->has('ItemPermanent')) {
            $item->is_permanent = $data->get('ItemPermanent') ?? 0;
        }

        if ($data->has('ItemRequiresCharges')) {
            $item->needs_charges = $data->get('ItemRequiresCharges') ?? 0;
        }

        if ($data->has('ItemDisplayCharges')) {
            $item->show_charges = $data->get('ItemDisplayCharges') ?? 0;
        }

        if ($data->has('ItemInitialCharges')) {
            $item->start_charges = $data->get('ItemInitialCharges') ?? 0;
        }

        if ($data->has('ItemAlertable')) {
            $item->is_alertable = $data->get('ItemAlertable') ?? 0;
        }

        if ($data->has('PingOverrideText')) {
            $item->alert_text = $data->get('PingOverrideText') ?? null;
        }

        if ($data->has('ItemCastOnPickup')) {
            $item->is_autocast = $data->get('ItemCastOnPickup') ?? 0;
        }

        if ($data->has('ItemShopTags')) {
            $item->shop_tags = $data->get('ItemShopTags') ?? [];
        }

        if ($data->has('ItemStockMax')) {
            $item->stock_max = $data->get('ItemStockMax') ?? 1;
        }

        if ($data->has('ItemStockInitial')) {
            $item->stock_initial = $data->get('ItemStockInitial') ?? 0;
        }

        if ($data->has('ItemStockTime')) {
            $item->stock_time = $data->get('ItemStockTime') ?? 0;
        }

        if ($data->has('ItemAliases')) {
            $item->aliases = $data->get('ItemAliases') ?? [];
        }

        if ($data->has('ItemDisassembleRule')) {
            $item->disassemble = $data->get('ItemDisassembleRule') ?? Constants::$disassemble[0];
        }

        if ($data->has('ItemDeclarations')) {
            $item->declarations =  app(ImportService::class)
                ->flagListToArray($data->get('ItemDeclarations'));
        }

        if ($data->has('IsTempestDoubleClonable')) {
            $item->is_tempest_cloneable = $data->get('IsTempestDoubleClonable');
        }

        if ($data->has('ItemContributesToNetWorthWhenDropped')) {
            $item->inc_net_on_drop = $data->get('ItemContributesToNetWorthWhenDropped');
        }

        if ($data->has('ShouldBeSuggested')) {
            $item->should_suggest = $data->get('ShouldBeSuggested');
        }

        if ($data->has('ShouldBeInitiallySuggested')) {
            $item->should_init_suggest = $data->get('ShouldBeInitiallySuggested');
        }

        if ($data->has('ItemSupport')) {
            $item->is_support_item = $data->get('ItemSupport');
        }

        if ($data->has('UIPickupSound')) {
            $item->sound_pickup = $data->get('UIPickupSound');
        }

        if ($data->has('UIDropSound')) {
            $item->sound_drop = $data->get('UIDropSound');
        }

        if ($data->has('WorldDropSound')) {
            $item->sound_drop_world = $data->get('WorldDropSound');
        }

        return $this;
    }

    public function generateNameFromBaseClass(string $baseClass)
    {
        if ( $this->isRecipeBaseClass($baseClass) ) {
            $name = "Recipe: ";
        }
        else {
            $name = "";
        }

        $baseClass = str_replace(
            ["item_", "recipe_"],
            ["", ""],
            $baseClass
        );

        $name .= str_replace("_", " ", $baseClass);

        $name = ucwords($name);

        return $name;
    }

    /**
     * Finds the Recipe Item for an Item
     *
     * @param Item $item
     *
     * @return null|Item
     */
    public function findItemRecipeItem(Item $item)
    {
        $recipeBaseClass = $this->itemNameToRecipeItemName($item->base_class);

        return Item::whereBaseClass($recipeBaseClass)->first();
    }

    /**
     * Find the Item for an RecipeItem
     *
     * @param Item $item
     *
     * @return null|Item
     */
    public function findRecipeItemItem(Item $item)
    {
        $recipeBaseClass = $this->recipeItemNameToItemName($item->base_class);

        return Item::whereBaseClass($recipeBaseClass)->first();
    }

    public function itemNameToRecipeItemName(string $baseClass)
    {
        return str_replace("item_", "item_recipe_", $baseClass);
    }

    public function recipeItemNameToItemName(string $baseClass)
    {
        return str_replace("item_recipe_", "item_", $baseClass);
    }

    public function isRecipeBaseClass(string $baseClass)
    {
        return substr_count($baseClass, "item_recipe") > 0;
    }

    public function shouldBeBossItem(string $baseClass)
    {
        return in_array($baseClass, static::$bossItems);
    }

}
