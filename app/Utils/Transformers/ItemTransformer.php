<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/27/17 3:03 PM
 */

namespace App\Utils\Transformers;
use App\Item;
use League\Fractal;

class ItemTransformer extends Fractal\TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'recipes', 'stats', 'ability', 'locale', 'shops'
    ];

    public function transform(Item $item)
    {
        return [
            'id'             => $item->id,
            'dota_id'        => $item->dota_id,
            'base_class'     => $item->base_class,
            'max_level'      => $item->max_level,
            'base_level'     => $item->base_level,
            'is_consumable'  => $item->is_consumable,
            'is_base_item'   => $item->is_base_item,
            'is_boss_item'   => $item->is_boss_item,
            'is_recipe'      => $item->is_recipe,
            'is_killable'    => $item->is_killable,
            'is_sellable'    => $item->is_sellable,
            'is_purchasable' => $item->is_purchasable,
            'is_droppable'   => $item->is_droppable,
            'in_backpack'    => $item->in_backpack,
            'name'           => $item->name,
            'description'    => $item->description,
            'cost'           => $item->cost,
            'stack_size'     => $item->stack_size,
            'model'          => $item->model,
            'fight_recap'    => $item->fight_recap,
            'quality'        => $item->quality,
            'share'          => $item->share,
            'stock_max'      => $item->stock_max,
            'stock_time'     => $item->stock_time,
            'stock_initial'  => $item->stock_initial,
            'start_charges'  => $item->start_charges,
            'show_charges'   => $item->show_charges,
            'needs_charges'  => $item->needs_charges,
            'is_autocast'    => $item->is_autocast,
            'is_alertable'   => $item->is_alertable,
            'alert_text'     => $item->alert_text,
            'created_at'     => $item->created_at->format('Y-m-d H:i:s'),
            'updated_at'     => $item->updated_at->format('Y-m-d H:i:s'),
            'is_permanent'   => $item->is_permanent,
            'disassemble'    => $item->disassemble,
            'script'         => $item->script,
            'shop_tags'      => $item->shop_tags,
            'aliases'        => $item->aliases,
            'is_override'    => $item->is_override,
            'declarations'   => $item->declarations
        ];
    }

    public function includeRecipes(Item $item)
    {
        return $this->collection($item->recipes, new RecipeTransformer());
    }
}