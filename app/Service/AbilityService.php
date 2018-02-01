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
use Illuminate\Support\Collection;

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
        $ability->script            = $request->get('script') ?? null;
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

        if ($request->exists('damage_type')) {
            $ability->damage_type = $request->get('damage_type') ?? null;
        }

        if ($request->exists('mana_cost')) {
            $ability->mana_cost = $request->get('mana_cost') ?? null;
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

    public function setPresentAbilityAttributesFromImport(Ability $ability, Collection $data)
    {
        if ($data->has('AbilityName')) {
            $ability->name = $data->get('AbilityName');
        }

        if ($data->has('BaseClass')) {
            $ability->base_class = $data->get('BaseClass') ?? "item_datadriven";
        }

        if ($data->has('AbilityType')) {
            $ability->type = $data->get('AbilityType') ?? null;
        }

        if ($data->has('AbilityTextureName')) {
            $tx = $data->get('AbilityTextureName');

            if ( is_array($tx) ) {
                $tx = reset($tx);
            }

            $ability->texture_name = $tx ?? null;
        }

        if ($data->has('AbilityBehavior')) {
            $ability->behaviour = app(ImportService::class)
                ->flagListToArray($data->get('AbilityBehavior'));
        }

        if ($data->has('AbilityUnitTargetTeam')) {
            $ability->target_team =  app(ImportService::class)
                ->flagListToArray($data->get('AbilityUnitTargetTeam'));
        }

        if ($data->has('AbilityUnitTargetType')) {
            $ability->target_type =  app(ImportService::class)
                ->flagListToArray($data->get('AbilityUnitTargetType'));
        }

        if ($data->has('AbilityUnitTargetFlags')) {
            $ability->target_flags =  app(ImportService::class)
                ->flagListToArray($data->get('AbilityUnitTargetFlags'));
        }

        if ($data->has('AbilityUnitDamageType')) {
            $ability->damage_type = $data->get('AbilityUnitDamageType');
        }

        if ($data->has('AbilityDamage')) {
            $d = $data->get('AbilityDamage');
            $ability->damage = is_array($d) ? $d : [$d];
        }

        if ($data->has('AbilityManaCost')) {
            $d = $data->get('AbilityManaCost');
            $ability->mana_cost = is_array($d) ? $d : [$d];
        }

        if ($data->has('AbilityGoldCost')) {
            $d = $data->get('AbilityGoldCost');
            $ability->gold_cost = is_array($d) ? $d : [$d];
        }

        if ($data->has('AbilityCooldown')) {
            $d = $data->get('AbilityCooldown');
            $ability->cooldown = is_array($d) ? $d : [$d];
        }

        if ($data->has('AbilityCastRange')) {
            $d = $data->get('AbilityCastRange');
            $ability->cast_range = is_array($d) ? $d : [$d];
        }

        if ($data->has('AbilityCastPoint')) {
            $d = $data->get('AbilityCastPoint');
            $ability->cast_point = is_array($d) ? $d : [$d];
        }

        if ($data->has('AbilityCastRangeBuffer')) {
            $d = $data->get('AbilityCastRangeBuffer');
            $ability->cast_range_buffer = is_array($d) ? $d : [$d];
        }

        if ($data->has('AbilityChannelTime')) {
            $d = $data->get('AbilityChannelTime');
            $ability->channel_time = is_array($d) ? $d : [$d];
        }

        if ($data->has('AbilityChannelledManaCostPerSecond')) {
            $d = $data->get('AbilityChannelledManaCostPerSecond');
            $ability->channel_mana_cost = is_array($d) ? $d : [$d];
        }

        if ($data->has('AbilityDuration')) {
            $d = $data->get('AbilityDuration');
            $ability->duration = is_array($d) ? $d : [$d];
        }

        if ($data->has('CastFilterRejectCaster')) {
            $ability->deny_self_cast = $data->get('CastFilterRejectCaster');
        }

        if ($data->has('IsCastableWhileHidden')) {
            $ability->cast_hidden = $data->get('IsCastableWhileHidden');
        }

        if ($data->has('AbilityProcsMagicStick')) {
            $ability->magic_stick = $data->get('AbilityProcsMagicStick');
        }

        if ($data->has('AbilitySharedCooldown')) {
            $ability->cooldown_group = $data->get('AbilitySharedCooldown');
        }

        if ($data->has("ScriptFile")) {
            $ability->script = $data->get("ScriptFile");
        }

        return $ability;
    }
}
