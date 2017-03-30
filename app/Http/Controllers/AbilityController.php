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
use App\Service\AbilityService;
use App\Utils\Constants;
use Illuminate\Http\Request;

class AbilityController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $abilities = Ability::with('items')->get();

        return view('ability/index', [
            'abilities' => $abilities
        ]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function show($id)
    {
        return redirect(route('abilities.edit', ['id' => $id]));
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    /**
     * @param StoreAbility $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAbility $request)
    {
        $ability = new Ability();

        $ability = app(AbilityService::class)->setAbilityAttributes($ability, $request);

        $ability->save();

        return redirect(route('abilities.show', $ability->id))->with('success', 'Created');
    }

    /**
     * @param StoreAbility $request
     * @param              $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreAbility $request, $id)
    {
        /** @var Ability $ability */
        $ability = Ability::findOrFail($id);

        $ability = app(AbilityService::class)->setPresentAbilityAttributes($ability, $request);

        $ability->save();

        return redirect(route('abilities.show', $ability->id))->with('success', 'Created');
    }
}