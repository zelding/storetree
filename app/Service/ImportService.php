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
use App\Utils\Constants;
use Illuminate\Support\Collection;

class ImportService
{
    /**
     * @param Item[] $data
     *
     * @return array
     */
    public function loadParsedKvArray(array $data)
    {
        $itemList = [];

        foreach( $data as $key => $value ) {

            $item   = $this->createItem(new Collection($value), $key);
            $recipe = $this->createRecipe(
                $item,
                new Collection($value["_recipe"]),
                substr_replace("item_recipe_", "item_", $key)
            );



            $itemList[] = $item;
        }

        return $itemList;
    }

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
        $item = new Item();

        app(ItemService::class)
            ->setDefaults($item)
            ->setPresentItemAttributesFromImport($item, $data);

        $item->base_class  = $base_class;

        $item->is_override = $item-> dota_id < 2000;
        $item->is_recipe = false;

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


    protected function isItemNameKey(string $key) : bool
    {
        return strncmp($key, "item_",5 ) === 0;
    }

    protected function isRecipeNameKey(string $key) : bool
    {
        return strncmp($key, "item_recipe_",12 ) === 0;
    }
}
