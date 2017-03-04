<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    protected $table = 'item_locale';

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
