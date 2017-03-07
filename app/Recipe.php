<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Recipe
 *
 * @property int $id
 * @property int $item_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $components
 * @property-read \App\Item $for
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereItemId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recipe whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read string[] $components_string
 */
class Recipe extends Model
{
    protected $dates = [
        'created_at', 'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function components()
    {
        return $this->belongsToMany(Item::class)->orderBy('name');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function for()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    /**
     * @return string[]
     */
    public function getComponentsStringAttribute()
    {
        $array = [];

        foreach($this->components as $component ) {
            if( $component->is_recipe ) {
                //only upgradeable items should have their recipes listed in the requirements
                if( $this->for->max_level > 1 ) {
                    $array[] = $component->base_class;
                }
            }
            else {
                $array[] = $component->base_class;
            }
        }

        return implode(';', $array);
    }
}

