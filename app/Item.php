<?php

namespace App;

use App\Utils\StatPivot;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Item
 *
 * @property int $id
 * @property int $dota_id
 * @property string $base_class
 * @property bool $max_level
 * @property bool $base_level
 * @property bool $is_consumable
 * @property bool $is_base_item
 * @property bool $is_boss_item
 * @property bool $is_recipe
 * @property bool $is_killable
 * @property bool $is_sellable
 * @property bool $is_purchasable
 * @property bool $is_droppable
 * @property bool $in_backpack
 * @property bool $is_override
 * @property string $name
 * @property string $description
 * @property int $cost
 * @property bool $stack_size
 * @property string $model
 * @property bool $fight_recap
 * @property string $quality
 * @property string $share
 * @property bool $stock_max
 * @property int $stock_time
 * @property bool $stock_initial
 * @property bool $start_charges
 * @property bool $show_charges
 * @property bool $needs_charges
 * @property bool $is_autocast
 * @property bool $is_alertable
 * @property string $alert_text
 * @property string $script
 * @property array $shop_tags
 * @property array $aliases
 * @property null|Item $lvl1Recipe
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $buildsInto
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $components
 * @property-read int $components_cost
 * @property-read int $total_cost
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Shop[] $shops
 * @method static \Illuminate\Database\Query\Builder|\App\Item find($id)
 * @method static \Illuminate\Database\Query\Builder|\App\Item findOrFail($id)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereAlertText($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereBaseClass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereBaseLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereCost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereDotaId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereFightRecap($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereInBackpack($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsAlertable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsAutocast($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsBaseItem($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsBossItem($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsConsumable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsDroppable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsKillable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsPurchasable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsRecipe($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsSellable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereMaxLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereModel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereNeedsCharges($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereQuality($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereShare($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereShowCharges($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereStackSize($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereStartCharges($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereStockInitial($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereStockMax($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereStockTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property bool $is_permanent
 * @property-read string $dota_class
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Recipe[] $recipes
 * @property-write mixed $class
 * @property \Illuminate\Database\Eloquent\Collection|\App\Stat[] $stats
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Recipe[] $usedInRecipes
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereIsPermanent($value)
 * @property string $disassemble
 * @property array $declarations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Ability[] $ability
 * @property-read string $printable_desc
 * @property-read null|Recipe $recipe
 * @property-read ItemLocale $selected_locale
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ItemLocale[] $locale
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereDisassemble($value)
 */
class Item extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'is_base_item'      => 'boolean',
        'is_boss_item'      => 'boolean',
        'is_consumable'     => 'boolean',
        'is_killable'       => 'boolean',
        'is_sellable'       => 'boolean',
        'is_purchasable'    => 'boolean',
        'is_droppable'      => 'boolean',
        'in_backpack'       => 'boolean',
        'show_charges'      => 'boolean',
        'needs_charges'     => 'boolean',
        'is_autocast'       => 'boolean',
        'is_alertable'      => 'boolean',
        'is_permanent'      => 'boolean',

        'shop_tags'         => 'array',
        'aliases'           => 'array',
        'declarations'      => 'array'
    ];

    /**
     * Recipes that build this item;
     *
     * Only the first is considered in calculations currently
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }

    /**
     * Returns the recipes that include this item
     *
     *
     *
     * @return mixed
     */
    public function usedInRecipes()
    {
        //only show one item once
        return $this->belongsToMany(Recipe::class)->groupBy('item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function shops()
    {
        return $this->belongsToMany(Shop::class);
    }

    /**
     * @return mixed
     */
    public function stats()
    {
        $stats = $this->belongsToMany(Stat::class)->using(StatPivot::class)->withPivot('value')->orderBy('name');

        return $stats;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locale()
    {
        return $this->hasMany(ItemLocale::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function ability()
    {
        return $this->belongsToMany(Ability::class);
    }

    /**
     * @return null|Item
     */
    public function getRecipeAttribute()
    {
        if ($this->is_base_item) {
            return null;
        }

        if ( $this->recipes->first() ) {
            foreach ( $this->recipes->first()->components as $component ) {
                if ( $component->is_recipe ) {
                    return $component;
                }
            }
        }

        return null;
    }

    /**
     * @return null|Item
     */
    public function getLvl1RecipeAttribute()
    {
         if ( $this->max_level > 1 && $recipe = $this->recipe ) {
             //remove the _# from the name
             $name = preg_replace('~_\d{1,}~', '', $recipe->base_class);

             $lvl1Recipe = Item::with('stats')
                         ->where('base_class', $name)
                         ->first();

             if ( $lvl1Recipe instanceof Item) {
                 return $lvl1Recipe;
             }

             return null;
         }

         return null;
    }

    /**
     * @param bool $trueCost
     * @return int
     */
    public function getTotalCostAttribute($trueCost = false)
    {
        if( $this->is_boss_item ) {
            return $trueCost ? $this->cost : 0;
        }

        if ( $this->is_base_item ) {
            return $this->cost;
        }

        return $this->getComponentsCostAttribute() + $this->cost;
    }

    /**
     * @return int
     */
    public function getComponentsCostAttribute()
    {
        $sum = 0;
        if ( $this->is_base_item ) {
            return 0;
        }

        if ( $this->recipes()->first() ) {
            $this->recipes()->first()->components()->get()->each(function (Item $item) use (&$sum) {
                $sum += $item->getTotalCostAttribute();
            });
        }

        return $sum;
    }

    /**
     * @return string
     */
    public function getDotaClassAttribute()
    {
        return $this->is_recipe ?  'item_recipe_'.$this->base_class : 'item_'.$this->base_class;
    }

    /**
     * @param string $className
     * @return $this
     */
    public function setClassAttribute($className = "")
    {
        $this->base_class = $this->is_recipe ?  'item_recipe_'.$this->base_class : 'item_'.$this->base_class;

        return $this;
    }

    /**
     * replaces line breaks with escaped line breaks
     *
     * @return string
     */
    public function getPrintableDescAttribute()
    {
        return str_replace(["\n", "\n\r", "\r"], "\\n", $this->description);
    }

    /**
     * Searches for the given translation,
     * and return it, otherwise it returns english
     *
     * @param int $id
     *
     * @return ItemLocale
     */
    public function getSelectedLocaleAttribute($id = 1)
    {
        $locale = $this->locale->first(
            function ($value, $key) use ($id) {
                /** @var ItemLocale $value */
                return $value->language_id == $id;
            }
        );

        if (!$locale instanceof ItemLocale) {
            $locale = $this->locale->first();
        }

        return $locale;
    }
}
