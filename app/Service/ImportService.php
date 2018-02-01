<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 10/12/17 11:43 AM
 */

namespace App\Service;


use App\Ability;
use App\Item;
use App\Recipe;
use App\Shop;
use App\Stat;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ImportService
{
    private $recipeDataBuffer = [];

    private $missingItems = [];

    /**
     * @param Item[] $data
     *
     * @return array
     */
    public function loadParsedKvArray(array $data) : array
    {
        $itemList = [
            "good"                => [],
            "base_class_mismatch" => [],
            "dota_id_in_use"      => [],
            "new"                 => [],
            "unusable"            => []
        ];

        foreach($data as $baseClass => $value) {

            $baseClass = str_replace("_1", "", $baseClass);

            $result = $this->resolveItem($baseClass, $value['ID']);

            switch($result) {
                case 1:
                    $itemList['good'][ $baseClass ] = $value;

                break;

                case 0:
                    $itemList['dota_id_in_use'][ $baseClass ] = $value;
                break;

                case -1:
                    $itemList['base_class_mismatch'][ $baseClass ] = $value;
                break;

                case -2:
                    $itemList['new'][ $baseClass ] = $value;
                    //$this->createItem(new Collection($value), $baseClass);
                break;
            }

            if ( !empty($value['_recipe']) ) {
                $recipeBaseClass = str_replace("item_", "item_recipe_", $baseClass);

                $result = $this->resolveItem($recipeBaseClass, $value['_recipe']['ID']);

                switch($result) {
                    case 1:
                        $itemList['good'][ $recipeBaseClass ] = $value['_recipe'];
                    break;

                    case 0:
                        $itemList['dota_id_in_use'][ $recipeBaseClass ] = $value['_recipe'];
                    break;

                    case -1:
                        $itemList['base_class_mismatch'][ $recipeBaseClass ] = $value['_recipe'];
                    break;

                    case -2:
                        $itemList['new'][ $recipeBaseClass ] = $value['_recipe'];
                        //$this->createRecipe(new Collection($value['_recipe']), $recipeBaseClass);
                    break;
                }
            }
        }

        return $itemList;
    }

    /*
     $itemList = [];

    foreach( $data as $key => $value ) {

        if ( empty($value['ID']) ) {
            continue;
        }

        $item = $this->createItem(new Collection($value), $key);

        if ( !empty($value["_recipe"]) ) {
            $recipe = $this->createRecipe(
                $item,
                new Collection($value["_recipe"]),
                substr_replace("item_recipe_", "item_", $key)
            );
        }
        else {
            $item->is_base_item = true;
        }

        $item->is_boss_item = empty($data['SideShop']) && empty($data['SecretShop']);

        if ( !$item->is_boss_item ) {
            $item->shops()->attach(1);
        }

        if ( !empty($data['SideShop']) ) {
            $item->shops()->attach(2);
        }

        if (  !empty($data['SecretShop']) ) {
            $item->shops()->attach(3);
        }

        $itemList[] = $item;
    }
     */

    public function groupEntities(array $data) : array
    {
        $list = [];

        foreach($data as $key => $entry) {
            if ( !empty($entry) && is_array($entry) ) {

                $itemName = str_replace("recipe_", "", $key);

                if (!array_key_exists($itemName, $list)) {
                    $list[ $itemName ] = [];
                }

                if ($this->isRecipeNameKey($key)) {
                    $list[ $itemName ]["_recipe"] = $entry;
                }
                elseif ($this->isItemNameKey($key)) {
                    $list[ $itemName ] = array_merge_recursive([], $list[ $itemName ], $entry);
                }
                else {
                    continue;
                }
            }
        }

        return $list;
    }

    public function createEntities(array &$groupedData)
    {
        foreach($groupedData as $type => $dataCollection) {

            if( !empty($dataCollection) ) {
                try {
                    foreach ($dataCollection as $baseClass => $itemData) {

                        switch ($type) {
                            case "good":
                                $this->updateItem($itemData, $baseClass);
                            break;

                            case "base_class_mismatch":
                            break;

                            case "dota_id_in_use":
                            break;

                            case "new":
                                $this->createItem($itemData, $baseClass);
                            break;
                        }
                    }
                }
                catch(\Illuminate\Database\QueryException $exception) {
                    $groupedData["unusable"][] = $baseClass;
                }

                $this->resolveMissingComponents();
            }
        }
    }

    /**
     * @param array  $itemData
     * @param string $baseClass
     *
     * @throws \Illuminate\Database\QueryException
     */
    protected function updateItem(array $itemData, string $baseClass)
    {
        $item = Item::whereDotaId($itemData["ID"])->first();

        if ( $item instanceof Item ) {
            $item->base_class = $baseClass;

            app(ItemService::class)
                ->setPresentItemAttributesFromImport($item, new Collection($itemData));

            $item->is_recipe      = app(ItemService::class)->isRecipeBaseClass($baseClass);
            $item->is_boss_item   = app(ItemService::class)->shouldBeBossItem($baseClass);
            $item->is_base_item   = $item->is_boss_item ? true  : $item->is_base_item;
            $item->is_purchasable = $item->is_boss_item ? false : $item->is_purchasable;

            if ( !app(ItemService::class)->isRecipeBaseClass($item->base_class) && !$item->is_base_item ) {
                $item->cost = 0;
            }

            $item->save();

            if ( !$item->is_recipe ) {
                $this->updateAbility($item, $itemData);
            }

            //the rest will inherit it
            if ( (int)$item->base_level === 1 && !empty($itemData["AbilitySpecial"]) ) {
                $this->updateStats($item, $itemData["AbilitySpecial"]);
            }
        }
    }

    /**
     * @param Item  $item
     * @param array $statsData
     *
     * @throws \Illuminate\Database\QueryException
     */
    protected function updateStats(Item $item, array $statsData)
    {
        $statIds = [];

        $i = 0;

        foreach( $statsData as $rn => $data ) {
            if ( empty($data["var_type"]) ) {
                Log::alert("{$item->base_class} is missing stat var type");
                continue;
            }

            $varType       = $data["var_type"];
            $keys          = array_keys($data);
            $statBaseClass = end($keys);
            $value         = $data[ $statBaseClass ];

            if ( !is_array($value) ) {
                $value = [$value];
            }

            if ( count($value) == 1 || count($value) == $item->max_level ) {
                $stat = Stat::whereDotaName($statBaseClass)->first();

                if ( !$stat instanceof Stat ) {
                    $stat = new Stat();
                    $stat->name       = $this->baseClassToName($statBaseClass);
                    $stat->dota_name  = $statBaseClass;
                    $stat->var_type   = $varType;
                    $stat->is_percent = false;
                    $stat->created_at = new \DateTime();

                    $stat->save();
                }

                $statIds[ $stat->id ] = [
                    "value"      => json_encode($value),
                    "order"      => $i++,
                    "created_at" => new \DateTime(),
                    "updated_at" => new \DateTime()
                ];

                $item->stats()->sync($statIds);

                $item->touch();
                $item->save();
            }
        }
    }

    /**
     * @param array  $itemData
     * @param string $baseClass
     *
     * @throws \Illuminate\Database\QueryException
     */
    protected function createItem(array $itemData, string $baseClass)
    {
        $item = new Item();

        app(ItemService::class)->setDefaults($item);

        $item->base_class   = $baseClass;

        app(ItemService::class)
            ->setPresentItemAttributesFromImport($item, new Collection($itemData));

        $item->is_recipe      = app(ItemService::class)->isRecipeBaseClass($baseClass);
        $item->is_boss_item   = app(ItemService::class)->shouldBeBossItem($baseClass);
        $item->is_base_item   = $item->is_boss_item ? true  : $item->is_base_item;
        $item->is_purchasable = $item->is_boss_item ? false : $item->is_purchasable;
        $item->name           = app(ItemService::class)->generateNameFromBaseClass($baseClass);

        if ( !app(ItemService::class)->isRecipeBaseClass($item->base_class) && !$item->is_base_item ) {
            $item->cost = 0;
        }

        $item->save();

        if ( $item->is_recipe || $item->is_base_item || !$item->is_boss_item ) {
            $item->shops()->attach(Shop::find(1));
        }

        if ( $item->is_boss_item ) {
            $item->shops()->attach(Shop::find(4));
        }

        if ( !$item->is_recipe ) {
            $this->updateAbility($item, $itemData);
        }

        if ( (int)$item->base_level === 1 && !empty($itemData["AbilitySpecial"]) ) {
            $this->updateStats($item, $itemData["AbilitySpecial"]);
        }

        //it is a recipe
        if ( empty($itemData["_recipe"]) ) {
            $baseItem = app(ItemService::class)->findRecipeItemItem($item);

            if ( $baseItem instanceof Item && !empty($this->recipeDataBuffer[ $baseItem->base_class ]) ) { //aeon didn't had recipes
                $this->createRecipes($baseItem, $this->recipeDataBuffer[ $baseItem->base_class ]);

                unset($this->recipeDataBuffer[ $baseItem->base_class ]);
            }
        }
        //it is an item, we put the recipe data away for later
        else {
            $this->recipeDataBuffer[ $item->base_class ] = $itemData["_recipe"];
        }
    }

    /**
     * @param Item  $item
     * @param array $recipeData
     *
     * @throws \Illuminate\Database\QueryException
     */
    protected function createRecipes(Item $item, array $recipeData)
    {
        if ( !empty($recipeData["ItemRequirements"]) ) {
            foreach( $recipeData["ItemRequirements"] as $row => $recipeItemsData ) {

                if ( !empty($recipeItemsData) && is_array($recipeItemsData)) {
                    $recipe = new Recipe();
                    $recipe->for()->associate($item);
                    $recipe->created_at = new \DateTime();
                    $recipe->updated_at = new \DateTime();

                    $recipe->save();

                    $recipeItem = app(ItemService::class)->findItemRecipeItem($item);

                    if ($recipeItem instanceof Item) {
                        $recipe->components()->attach($recipeItem);
                    }

                    foreach ($recipeItemsData as $baseClass) {
                        $component = Item::whereBaseClass($baseClass)->first();

                        if ($component instanceof Item) {
                            $recipe->components()->attach($component);
                        }
                        else {
                            if (!array_key_exists($baseClass, $this->missingItems)) {
                                $this->missingItems[ $baseClass ] = [$item->base_class];
                            }
                            else {
                                $this->missingItems[ $baseClass ][] = $item->base_class;
                            }
                        }
                    }
                }
            }
        }
    }

    /**
     * @param Item  $item
     * @param array $itemData
     *
     * @throws \Illuminate\Database\QueryException
     */
    protected function updateAbility(Item $item, array $itemData)
    {
        if ( !empty($itemData["AbilityTextureName"]) ) {
            $abilityName = $item->lvl1Recipe ?
                $this->baseClassToName(
                    app(ItemService::class)
                        ->recipeItemNameToItemName($item->lvl1Recipe->base_class)
                ) :
                $this->baseClassToName($item->base_class);

            $ability = Ability::whereName($abilityName)->first();

            if ( !$ability instanceof Ability ) {
                $ability = new Ability();
                $ability->name = $abilityName;
            }

            app(AbilityService::class)
                ->setPresentAbilityAttributesFromImport($ability, new Collection($itemData));

            if ( $ability->script ) {
                $ability->base_class = "item_lua";
            }

            $ability->save();
            $item->ability()->attach($ability);
        }
    }

    /**
     * @throws \Illuminate\Database\QueryException
     */
    protected function resolveMissingComponents()
    {
        if ( !empty($this->missingItems) ) {
            foreach( $this->missingItems as $missingItemBaseClass => $dependantsBaseClasses ) {

                $missingItem = Item::whereBaseClass($missingItemBaseClass)->first();

                if ( $missingItem instanceof Item ) {

                    foreach( $dependantsBaseClasses as $dependantBaseClass ) {
                        $dependantItem = Item::whereBaseClass($dependantBaseClass)->first();

                        if ( $dependantItem instanceof Item) {
                            $recipes = $dependantItem->recipes()->get();

                            foreach($recipes as $recipe) {
                                if  ( !$recipe->components->contains($missingItem->id) ) {
                                    $recipe->components()->attach($missingItem);
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    /**
     * @param string $base_class
     * @param int    $dotaId
     *
     * @return int
     */
    protected function resolveItem(string $base_class, int $dotaId)
    {
        $perfectMatch = Item::whereBaseClass($base_class)
                            ->whereDotaId($dotaId)
                            ->first();

        if ( $perfectMatch instanceof Item ) {
            return 1;
        }

        $dotaIdMatch = Item::whereDotaId($dotaId)->first();

        if ( $dotaIdMatch instanceof Item) {
            return -1;
        }

        $baseClassMatch = Item::whereBaseClass($base_class)->first();

        if ( $baseClassMatch instanceof Item) {
            return 0;
        }

        return -2;
    }

    public function flagListToArray(string $flagList, $default = null)
    {
        if ( substr_count($flagList, "|") ) {
            $declarations = str_replace(" ", "", $flagList);
            return explode("|", $declarations);
        }
        else {
            return [$flagList] ?? $default;
        }
    }

    protected function isItemNameKey(string $key) : bool
    {
        return strncmp($key, "item_",5 ) === 0;
    }

    protected function isRecipeNameKey(string $key) : bool
    {
        return strncmp($key, "item_recipe_",12 ) === 0;
    }

    protected function baseClassToName(string $baseClass)
    {
        return str_replace(" ","", ucwords(str_replace("_", " ", $baseClass)));
    }
}
