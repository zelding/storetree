<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Script
 *
 * @property int $id
 * @property int $item_id
 * @property string $name
 * @property mixed $data
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Script whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Script whereData($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Script whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Script whereItemId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Script whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Script whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Script extends Model
{
    protected $casts = [
        'data' => 'array'
    ];

    protected $dates = [
        'updated_at', 'created_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|Item
     */
    public function item()
    {
        return  $this->belongsTo(Item::class);
    }
}
