<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'is_base_item'  => 'boolean',
        'is_boss_item'  => 'boolean',
        'is_consumable' => 'boolean'
    ];

    public function components()
    {
        if ( $this->is_base_item ) {
            throw new \TypeError("Base items doesn't have components");
        }

        return $this->belongsToMany(Item::class, 'recipes', 'item_id', 'component_id');
    }

    public function buildsInto()
    {
        //needs the distinct so items don't show up multiple times when they build from multiple components of the same type
        return $this->belongsToMany(Item::class, 'recipes', 'component_id', 'item_id')->distinct();
    }

    public function shops()
    {
        return $this->belongsToMany(Shop::class);
    }

    public function getTotalCostAttribute()
    {
        if ( $this->is_base_item ) {
            return $this->cost;
        }

        return $this->getComponentsCostAttribute() + $this->cost;
    }

    public function getComponentsCostAttribute()
    {
        $sum = 0;
        if ( $this->is_base_item ) {
            return 0;
        }

        $this->components()->get()->each(function (Item $item) use (&$sum) {
            $sum += $item->getTotalCostAttribute();
        });

        return $sum;
    }
}
