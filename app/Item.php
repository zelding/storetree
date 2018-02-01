<?php

namespace App;

use App\Utils\StatPivot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

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
 * @property int $stock_max
 * @property int $stock_time
 * @property int $stock_initial
 * @property int[] $start_charges
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
 * @property-read \Illuminate\Database\Eloquent\Collection|Item[] $buildsInto
 * @property-read \Illuminate\Database\Eloquent\Collection|Item[] $components
 * @property-read int $components_cost
 * @property-read int $total_cost
 * @property-read \Illuminate\Database\Eloquent\Collection|Shop[] $shops
 * @method static Builder|Item find($id)
 * @method static Builder|Item findOrFail($id)
 * @method static Builder|Item whereAlertText($value)
 * @method static Builder|Item whereBaseClass($value)
 * @method static Builder|Item whereBaseLevel($value)
 * @method static Builder|Item whereCost($value)
 * @method static Builder|Item whereCreatedAt($value)
 * @method static Builder|Item whereDescription($value)
 * @method static Builder|Item whereDotaId($value)
 * @method static Builder|Item whereFightRecap($value)
 * @method static Builder|Item whereId($value)
 * @method static Builder|Item whereInBackpack($value)
 * @method static Builder|Item whereIsAlertable($value)
 * @method static Builder|Item whereIsAutocast($value)
 * @method static Builder|Item whereIsBaseItem($value)
 * @method static Builder|Item whereIsBossItem($value)
 * @method static Builder|Item whereIsConsumable($value)
 * @method static Builder|Item whereIsDroppable($value)
 * @method static Builder|Item whereIsKillable($value)
 * @method static Builder|Item whereIsPurchasable($value)
 * @method static Builder|Item whereIsRecipe($value)
 * @method static Builder|Item whereIsSellable($value)
 * @method static Builder|Item whereMaxLevel($value)
 * @method static Builder|Item whereModel($value)
 * @method static Builder|Item whereName($value)
 * @method static Builder|Item whereNeedsCharges($value)
 * @method static Builder|Item whereQuality($value)
 * @method static Builder|Item whereShare($value)
 * @method static Builder|Item whereShowCharges($value)
 * @method static Builder|Item whereStackSize($value)
 * @method static Builder|Item whereStartCharges($value)
 * @method static Builder|Item whereStockInitial($value)
 * @method static Builder|Item whereStockMax($value)
 * @method static Builder|Item whereStockTime($value)
 * @method static Builder|Item whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property bool $is_permanent
 * @property-read string $dota_class
 * @property-read \Illuminate\Database\Eloquent\Collection|Recipe[] $recipes
 * @property-write mixed $class
 * @property \Illuminate\Database\Eloquent\Collection|Stat[] $stats
 * @property-read \Illuminate\Database\Eloquent\Collection|Recipe[] $usedInRecipes
 * @method static \Illuminate\Database\Query\Builder|Item whereIsPermanent($value)
 * @property string $disassemble
 * @property array $declarations
 * @property-read \Illuminate\Database\Eloquent\Collection|Ability[] $ability
 * @property-read string $printable_desc
 * @property-read null|Recipe $recipe
 * @property-read ItemLocale $selected_locale
 * @property-read \Illuminate\Database\Eloquent\Collection|ItemLocale[] $locale
 * @method static \Illuminate\Database\Query\Builder|Item whereDisassemble($value)
 * @method static Builder exportRequest(Request $request)
 * @method static Builder pager(Request $request)
 */
class Item extends Model
{
    use Utils\PagerScopeTrait;
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
        'is_recipe'         => 'boolean',
        'is_override'       => 'boolean',

        'shop_tags'         => 'array',
        'aliases'           => 'array',
        'declarations'      => 'array',
        'start_charges'     => 'array'
    ];

    #region Relations
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function stats()
    {
        $stats = $this->belongsToMany(Stat::class)
                      ->using(StatPivot::class)
                      ->withPivot('value', 'order')
                      ->orderBy('pivot_order');

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
    #endregion

    #region Custom Attributes
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

    public function getLvl1Attribute()
    {
        if ( $this->max_level > 1 ) {
            $name = preg_replace('~_\d{1,}~', '', $this->base_class);

            return Item::whereBaseClass($name)->first();
        }

        return $this;
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
    #endregion

    /**
     * @param Builder $query
     * @param Request $request
     *
     * @return Builder
     */
    public function scopeExportRequest($query, Request $request)
    {
        $override = $request->get('override') ?? false;

        $query->where('is_override', $override);

        return $query;
    }
}
