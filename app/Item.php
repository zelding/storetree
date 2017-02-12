<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $casts = [
        'base_item' => 'boolean'
    ];

    public function recipes()
    {
        if ( $this->attributes['base_item'] ) {
            throw new \TypeError("Base items doesn't have components");
        }

        return $this->hasMany(Recipe::class);
    }

    public function shops()
    {
        return $this->belongsToMany(Shop::class);
    }
}
