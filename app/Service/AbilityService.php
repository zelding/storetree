<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/30/17 3:46 PM
 */

namespace App\Service;

use App\Ability;
use Illuminate\Http\Request;

class AbilityService
{
    /**
     * @param Ability $ability
     * @param Request $request
     *
     * @return Ability
     */
    public function setAbilityAttributes(Ability $ability, Request $request)
    {
        $ability->name              = $request->get('name');
        $ability->base_class        = $request->get('base_class') ?? null;
        $ability->type              = $request->get('type') ?? null;
        $ability->texture_name      = $request->get('texture_name') ?? null;
        $ability->behaviour         = $request->get('behaviour') ?? null;
        $ability->target_team       = $request->get('target_team') ?? null;
        $ability->target_type       = $request->get('target_type') ?? null;
        $ability->target_flags      = $request->get('target_flags') ?? null;
        $ability->damage            = $request->get('damage') ?? null;
        $ability->mana_cost         = $request->get('mana_cost') ?? null;
        $ability->gold_cost         = $request->get('gold_cost') ?? null;
        $ability->cooldown          = $request->get('cooldown') ?? [];
        $ability->cast_range        = $request->get('cast_range') ?? null;
        $ability->cast_point        = $request->get('cast_point') ?? null;
        $ability->cast_range_buffer = $request->get('cast_range_buffer') ?? null;
        $ability->channel_time      = $request->get('channel_time') ?? null;
        $ability->channel_mana_cost = $request->get('channel_mana_cost') ?? null;
        $ability->duration          = $request->get('duration') ?? null;
        $ability->deny_self_cast    = $request->get('deny_self_cast') ?? false;
        $ability->cast_hidden       = $request->get('cast_hidden') ?? false;
        $ability->magic_stick       = $request->get('magic_stick') ?? false;
        $ability->cooldown_group    = $request->get('cooldown_group') ?? "";
        $ability->is_override       = $request->get('is_override') ?? false;

        return $ability;
    }

    public function setPresentAbilityAttributes(Ability $ability, Request $request)
    {
        if ($request->exists('name')) {
            $ability->name = $request->get('name');
        }

        if ($request->exists('base_class')) {
            $ability->base_class = $request->get('base_class') ?? null;
        }

        if ($request->exists('type')) {
            $ability->type = $request->get('type') ?? null;
        }

        if ($request->exists('texture_name')) {
            $ability->texture_name = $request->get('texture_name') ?? null;
        }

        if ($request->exists('behaviour')) {
            $ability->behaviour = $request->get('behaviour') ?? null;
        }

        if ($request->exists('target_team')) {
            $ability->target_team = $request->get('target_team') ?? null;
        }

        if ($request->exists('target_type')) {
            $ability->target_type = $request->get('target_type') ?? null;
        }

        if ($request->exists('target_flags')) {
            $ability->target_flags = $request->get('target_flags') ?? null;
        }

        if ($request->exists('damage')) {
            $ability->damage = $request->get('damage') ?? null;
        }

        if ($request->exists('damage')) {
            $ability->mana_cost = $request->get('damage') ?? null;
        }

        if ($request->exists('gold_cost')) {
            $ability->gold_cost = $request->get('gold_cost') ?? null;
        }

        if ($request->exists('cooldown')) {
            $ability->cooldown = $request->get('cooldown') ?? [];
        }

        if ($request->exists('cast_range')) {
            $ability->cast_range = $request->get('cast_range') ?? null;
        }

        if ($request->exists('cast_point')) {
            $ability->cast_point = $request->get('cast_point') ?? null;
        }

        if ($request->exists('cast_range_buffer')) {
            $ability->cast_range_buffer = $request->get('cast_range_buffer') ?? null;
        }

        if ($request->exists('channel_time')) {
            $ability->channel_time = $request->get('channel_time') ?? null;
        }

        if ($request->exists('channel_mana_cost')) {
            $ability->channel_mana_cost = $request->get('channel_mana_cost') ?? null;
        }

        if ($request->exists('duration')) {
            $ability->duration = $request->get('duration') ?? null;
        }

        if ($request->exists('deny_self_cast')) {
            $ability->deny_self_cast = $request->get('deny_self_cast') ?? false;
        }

        if ($request->exists('cast_hidden')) {
            $ability->cast_hidden = $request->get('cast_hidden') ?? false;
        }

        if ($request->exists('magic_stick')) {
            $ability->magic_stick = $request->get('magic_stick') ?? false;
        }

        if ($request->exists('cooldown_group')) {
            $ability->cooldown_group = $request->get('cooldown_group') ?? "";
        }

        if ($request->exists('is_override')) {
            $ability->is_override = $request->get('is_override') ?? false;
        }

        return $ability;
    }
}
