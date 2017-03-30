<?php

namespace App\Http\Requests;

use App\Utils\Constants;
use Illuminate\Support\Facades\Auth;

class StoreStat extends JsonRequest
{
    protected $errorTypes = [
        406 => [
            'var_type', 'stat_group'
        ],
        409 => [
            'name', 'dota_name'
        ]
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('edit_stats');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"       => "required|unique:stats,name,{$this->id}|max:255",
            "dota_name"  => "required|unique:stats,dota_name,{$this->id}|max:255",
            "var_type"   => "required|in:".implode(',', Constants::$varTypes),
            "stat_group" => "max:255"
        ];
    }
}
