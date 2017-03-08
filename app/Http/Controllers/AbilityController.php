<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/6/17 9:47 AM
 */

namespace App\Http\Controllers;


use App\Ability;
use App\Http\Requests\StoreAbility;
use App\Utils\Constants;
use Illuminate\Http\Request;

class AbilityController
{
    public function index()
    {
        $abilities = Ability::with('items')->get();

        return view('ability/index', [
            'abilities' => $abilities
        ]);
    }

    public function create(Request $request)
    {
        return view('ability/create', [
            'request'     => $request,
            'types'       => Constants::$abilityType,
            'behaviour'   => Constants::$abilityBehavior,
            'targetTeam'  => Constants::$targetTeam,
            'targetType'  => Constants::$targetType,
            'targetFlags' => Constants::$targetFlags,
        ]);
    }

    public function show($id)
    {
        return redirect(route('abilities.edit', ['id' => $id]));
    }

    public function edit($id)
    {
        $ability = Ability::findOrFail($id);

        return view('ability/edit', [
            'ability'     => $ability,
            'types'       => Constants::$abilityType,
            'behaviour'   => Constants::$abilityBehavior,
            'targetTeam'  => Constants::$targetTeam,
            'targetType'  => Constants::$targetType,
            'targetFlags' => Constants::$targetFlags,
        ]);
    }

    public function store(StoreAbility $request)
    {
        $ability = new Ability();

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
        $ability->save();

        return redirect(route('abilities.show', $ability->id))->with('success', 'Created');
    }

    public function update(StoreAbility $request, $id)
    {
        /** @var Ability $ability */
        $ability = Ability::findOrFail($id);

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
        $ability->save();

        return redirect(route('abilities.show', $ability->id))->with('success', 'Created');
    }
}