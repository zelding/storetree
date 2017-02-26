<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function components()
    {
        return $this->belongsToMany(Item::class);
    }

    public function for()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}

