<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function components()
    {
        return $this->hasMany(Item::class);
    }
}
