<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
