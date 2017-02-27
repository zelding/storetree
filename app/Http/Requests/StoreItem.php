<?php

namespace App\Http\Requests;

use App\Utils\Constants;
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
            "item_shops"  => "required_with:is_purchasable|required_without:boss_item|distinct|exists:shops,id",

            "dota_id"       => "required|numeric|unique:items,dota_id,{$this->dota_id}",
            "base_class"    => "required|string|unique:items,base_class,{$this->base_class}",
            "base_level"    => "numeric|min:1",
            "max_level"     => "numeric|greater_or_equal_than:base_level",
            "stack_size"    => "numeric|min:1",
            "start_charges" => "required_with:needs_charges|numeric|min:0",
            "alert_text"    => "string",
            "model"         => "required|string",
            "fight_recap"   => "required|numeric|min:0",
            "quality"       => "required|in:".implode(',', Constants::$itemQuality),
            "share"         => "required|in:".implode(',', Constants::$shareable),
        ];
    }
}
