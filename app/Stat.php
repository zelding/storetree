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
 * @property string $var_name
 * @property string $dota_name
 * @property string $stat_group
 * @property bool $is_percent
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
 * @property-read string $var_string
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereIsPercent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereStatGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stat whereVarName($value)
 */
class Stat extends Model
{
    protected $dates = [
        'created_at', 'updated_at'
    ];

    protected $casts = [
        'is_percent' => 'boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    /**
     * @return string|int|array
     */
    public function getValueAttribute()
    {
        return $this->pivot->value;
    }

    /**
     * @return string
     */
    public function getVarStringAttribute()
    {
        $perc    = "";
        $prefix  = "bonus_";
        $varName = $this->dota_name;

        if (substr($varName, 0, strlen($prefix)) == $prefix) {
            $varName = substr($varName, strlen($prefix));
        }

        if ( $this->is_percent ) {
            $perc = "%";
        }

        return "{$perc}+$".$varName;
    }

    /**
     * @param Model $parent
     * @param array $attributes
     * @param string $table
     * @param bool $exists
     * @param null $using
     * @return StatPivot
     */
    public function newPivot(Model $parent, array $attributes, $table, $exists, $using = null)
    {
        return new StatPivot($parent, $attributes, $table, $exists, $using);
    }
}
