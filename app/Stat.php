<?php

namespace App;

use App\Utils\StatPivot;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function getValueAttribute()
    {
        return $this->pivot->value;
    }

    public function newPivot(Model $parent, array $attributes, $table, $exists, $using = null)
    {
        return new StatPivot($parent, $attributes, $table, $exists, $using);
    }
}
