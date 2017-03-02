<?php

namespace App;

use App\Utils\StatPivot;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Stat
 *
 * @property int $id
 * @property string $name
 * @property string $var_type
 * @property string $dota_name
 * @property string $stat_group
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $items
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereDotaName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereVarType($value)
 * @mixin \Eloquent
 */
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
