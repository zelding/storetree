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
        //add the required prefix before the class name
        if ( $this->is_recipe ) {
            $this->request->replace(['base_class' => "item_recipe_".$this->request->get('base_class')]);
        }
        else {
            $this->request->replace(['base_class' => "item_".$this->request->get('base_class')]);
        }

        return [
            "name"        => "required|unique:items,name,{$this->id}|max:255",
            "description" => "required_without:recipe_item|max:2048",
            "cost"        => "required_if:base_item,1",
            "base_item"   => "required_with:recipe_item",
            "boss_item"   => "denied_with:recipe_item",
            "item_shops"  => "required_without:boss_item|distinct|exists:shops,id",
            "dota_id"     => "required|numeric|unique:items,dota_id,{$this->dota_id}",
            "base_class"  => "required|string|unique:items,base_class",
            "base_level"  => "numeric|min:1",
            "max_level"   => "numeric|greater_or_equal_than:base_level",
        ];
    }
}
