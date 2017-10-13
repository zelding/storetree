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


use App\Item;
use App\Recipe;
use Illuminate\Support\Collection;

class ImportService
{
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

        foreach($data as $key => $value) {

            $result = $this->resolveItem($key, $value['ID']);

            switch($result) {
                case 1:
                    $itemList['good'][ $key ] = $value;
                break;

                case 0:
                    $itemList['dota_id_in_use'][ $key ] = $value;
                break;

                case -1:
                    $itemList['base_class_mismatch'][ $key ] = $value;
                break;

                case -2:
                    $itemList['new'][ $key ] = $value;
                break;
            }

            if ( !empty($value['_recipe']) ) {
                $recipeBaseClass = str_replace("item_", "item_recipe_", $key);

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
            $itemName = str_replace("recipe_", "", $key);

            if ( !array_key_exists($itemName, $list) ) {
                $list[ $itemName ] = [];
            }

            if ( $this->isRecipeNameKey($key) ) {
                $list[ $itemName ]["_recipe"] = $entry;
            }
            elseif($this->isItemNameKey($key) ) {
                $list[ $itemName ] = array_merge_recursive([], $list[ $itemName ], $entry);
            }
            else {
                continue;
            }
        }

        return $list;
    }

    protected function createItem(Collection $data, string $base_class) : Item
    {
        $dotaId = $data->get('ID');

        $item = $this->resolveItem($base_class, $dotaId);

        if ($item instanceof Item) {
            app(ItemService::class)
                ->setPresentItemAttributesFromImport($item, $data);
        }
        else {
            $item = new Item();

            app(ItemService::class)
                ->setDefaults($item)
                ->setPresentItemAttributesFromImport($item, $data);

            $item->is_override = $item-> dota_id < 2000;
            $item->is_recipe   = false;
        }

        $item->save();

        return $item;
    }

    protected function createRecipe(Item $item, Collection $data, string $base_class) : Recipe
    {
        $recipe          = new Recipe();
        $recipe->item_id = $item->id ?? 999;

        $recipeItem   = new Item();

        app(ItemService::class)
            ->setDefaults($recipeItem)
            ->setPresentItemAttributesFromImport($recipeItem, $data);

        $recipeItem->base_class  = $base_class;

        $recipeItem->is_override = $recipeItem-> dota_id < 2000;
        $recipeItem->is_recipe = true;

        //$item->recipes()->save($recipe);

        return $recipe;
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

        $baseClassMatch = Item::whereBaseClass($base_class)->first();

        if ( $baseClassMatch instanceof Item) {
            return 0;
        }

        $dotaIdMatch = Item::whereDotaId($dotaId)->first();

        if ( $dotaIdMatch instanceof Item) {
            return -1;
        }

        return -2;
    }

    protected function isItemNameKey(string $key) : bool
    {
        return strncmp($key, "item_",5 ) === 0;
    }

    protected function isRecipeNameKey(string $key) : bool
    {
        return strncmp($key, "item_recipe_",12 ) === 0;
    }
}
