<?php

namespace App\Http\Requests;

use App\Utils\Constants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreAbility extends FormRequest
{
    use SelectCleaner;

    protected $fields = [
        'damage', 'mana_cost', 'gold_cost',
        'cooldown', 'cast_range', 'cast_point',
        'cast_range_buffer', 'channel_time', 'channel_mana_cost',
        'duration'
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('edit_abilities');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->request = $this->clean($this->request);

        return [
            "name"                => "required|string|max:255",
            "base_class"          => "nullable|max:255",
            "type"                => "required|in:".implode(',', Constants::$abilityType),
            "behaviour.*"         => "required|in:".implode(',', Constants::$abilityBehavior),
            "target_team.*"       => "nullable|in:".implode(',', Constants::$targetTeam),
            "target_type.*"       => "nullable|in:".implode(',', Constants::$targetType),
            "target_flags.*"      => "nullable|in:".implode(',', Constants::$targetFlags),
            "damage.*"            => "nullable",
            "mana_cost.*"         => "nullable",
            "gold_cost.*"         => "nullable",
            "cooldown.*"          => "required",
            "cast_range.*"        => "nullable",
            "cast_point.*"        => "nullable",
            "cast_range_buffer.*" => "nullable",
            "channel_time.*"      => "required",
            "channel_mana_cost.*" => "required",
            "duration.*"          => "required",

        ];
    }
}
