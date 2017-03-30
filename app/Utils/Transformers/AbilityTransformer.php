<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/30/17 2:54 PM
 */

namespace App\Utils\Transformers;

use League\Fractal;
use App\Ability;

class AbilityTransformer extends Fractal\TransformerAbstract
{
    protected $availableIncludes = [
        'items'
    ];

    public function transform(Ability $ability)
    {
        return [
            "id"                => $ability->id,
            "name"              => $ability->name,
            "base_class"        => $ability->base_class,
            "behaviour"         => $ability->behaviour,
            "type"              => $ability->type,
            "texture_name"      => $ability->texture_name,
            "deny_self_cast"    => $ability->deny_self_cast,
            "cast_hidden"       => $ability->cast_hidden,
            "target_team"       => $ability->target_team,
            "target_type"       => $ability->target_type,
            "target_flags"      => $ability->target_flags,
            "damage_type"       => $ability->damage_type,
            "damage"            => $ability->damage,
            "mana_cost"         => $ability->mana_cost,
            "gold_cost"         => $ability->gold_cost,
            "cooldown"          => $ability->cooldown,
            "cast_range"        => $ability->cast_range,
            "cast_point"        => $ability->cast_point,
            "cast_range_buffer" => $ability->cast_range_buffer,
            "channel_time"      => $ability->channel_time,
            "channel_mana_cost" => $ability->channel_mana_cost,
            "duration"          => $ability->duration,
            "cooldown_group"    => $ability->cooldown_group,
            "created_at"        => $ability->created_at->format('Y-m-d H:i:s'),
            "updated_at"        => $ability->updated_at->format('Y-m-d H:i:s'),
            "magic_stick"       => $ability->magic_stick,
            "is_override"       => $ability->is_override,
        ];
    }

    public function includeItems(Ability $ablility)
    {
        return $this->collection($ablility->items, new SimpleItemTransformer());
    }
}