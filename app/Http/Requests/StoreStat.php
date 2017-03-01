<?php

namespace App\Http\Requests;

use App\Utils\Constants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreStat extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"      => "required|unique:stats,name,id,{$this->id}|max:255",
            "dota_name" => "required|unique:stats,dota_name,id,{$this->id}|max:255",
            "var_type"  => "required|in:".implode(',', Constants::$varTypes)
        ];
    }
}
