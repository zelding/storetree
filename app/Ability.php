<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
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
 * @property string $script
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static Builder|Ability whereBaseClass($value)
 * @method static Builder|Ability whereBehaviour($value)
 * @method static Builder|Ability whereCastHidden($value)
 * @method static Builder|Ability whereCastPoint($value)
 * @method static Builder|Ability whereCastRange($value)
 * @method static Builder|Ability whereCastRangeBuffer($value)
 * @method static Builder|Ability whereChannelManaCost($value)
 * @method static Builder|Ability whereChannelTime($value)
 * @method static Builder|Ability whereCooldown($value)
 * @method static Builder|Ability whereCooldownGroup($value)
 * @method static Builder|Ability whereCreatedAt($value)
 * @method static Builder|Ability whereDamage($value)
 * @method static Builder|Ability whereDamageType($value)
 * @method static Builder|Ability whereDenySelfCast($value)
 * @method static Builder|Ability whereDuration($value)
 * @method static Builder|Ability whereGoldCost($value)
 * @method static Builder|Ability whereId($value)
 * @method static Builder|Ability whereManaCost($value)
 * @method static Builder|Ability whereName($value)
 * @method static Builder|Ability whereTargetFlags($value)
 * @method static Builder|Ability whereTargetTeam($value)
 * @method static Builder|Ability whereTargetType($value)
 * @method static Builder|Ability whereTextureName($value)
 * @method static Builder|Ability whereType($value)
 * @method static Builder|Ability whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property bool $magic_stick
 * @property-read \Illuminate\Database\Eloquent\Collection|Item[] $items
 * @method static |Ability whereMagicStick($value)
 * @method static Builder pager(Request $request)
 */
class Ability extends Model
{
    use Utils\PagerScopeTrait;

    protected $table = "abilities";

    protected $dates = [
        'created_at', 'updated_at'
    ];

    protected $casts = [
        'deny_self_cast' => 'boolean',
        'cast_hidden'    => 'boolean',
        'magic_stick'    => 'boolean',
        'is_override'    => 'boolean',

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
