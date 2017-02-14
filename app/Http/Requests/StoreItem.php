<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreItem extends FormRequest
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
            "name"        => "required|unique:items|max:255",
            "description" => "required_without:recipe_item|max:2048",
            "cost"        => "required_if:base_item,1",
            "base_item"   => "required_with:recipe_item",
            "boss_item"   => "denied_with:recipe_item",
            "item_shops"  => "required_without:boss_item|distinct|exists:shops"
        ];
    }
}
