<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Ability
 *
 * @property int $id
 * @property string $name
 * @property string $base_class
 * @property array $behaviour
 * @property string $type
 * @property string $texture_name
 * @property bool $deny_self_cast
 * @property bool $cast_hidden
 * @property array $target_team
 * @property array $target_type
 * @property array $target_flags
 * @property string $damage_type
 * @property string $damage
 * @property array $mana_cost
 * @property array $gold_cost
 * @property array $cooldown
 * @property array $cast_range
 * @property array $cast_point
 * @property array $cast_range_buffer
 * @property array $channel_time
 * @property array $channel_mana_cost
 * @property array $duration
 * @property string $cooldown_group
 * @property bool $is_override
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereBaseClass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereBehaviour($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCastHidden($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCastPoint($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCastRange($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCastRangeBuffer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereChannelManaCost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereChannelTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCooldown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCooldownGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereDamage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereDamageType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereDenySelfCast($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereDuration($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereGoldCost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereManaCost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereTargetFlags($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereTargetTeam($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereTargetType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereTextureName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property bool $magic_stick
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $items
 * @method static \Illuminate\Database\Query\Builder|\App\Ability whereMagicStick($value)
 */
class Ability extends Model
{
    protected $table = "abilities";

    protected $dates = [
        'created_at', 'updated_at'
    ];

    protected $casts = [
        'deny_self_cast' => 'boolean',
        'cast_hidden'    => 'boolean',
        'magic_stick'    => 'boolean',

        'behaviour'         => 'array',
        'target_team'       => 'array',
        'target_type'       => 'array',
        'target_flags'      => 'array',
        'damage'            => 'array',
        'mana_cost'         => 'array',
        'gold_cost'         => 'array',
        'cooldown'          => 'array',
        'cast_range'        => 'array',
        'cast_range_buffer' => 'array',
        'cast_point'        => 'array',
        'channel_time'      => 'array',
        'channel_mana_cost' => 'array',
        'duration'          => 'array',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function items()
    {
        return $this->belongsToMany(Item::class);
    }
}
