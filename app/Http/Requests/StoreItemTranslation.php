<?php

namespace App\Http\Requests;

use App\Utils\Constants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreItemTranslation extends FormRequest
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
        $rules = [];

        foreach($this->request->get('name') as $key => $value) {
            $rules["name.{$key}"] = "required_with:lore.{$key},note.{$key},description.{$key}|max:255";
            $rules["lore.{$key}"] = "max:255";
            $rules["description.{$key}"] = "required_with:name.{$key}|max:2048";
            $rules["note.{$key}"] = "max:255";
        }

        return $rules;
    }

    public function messages()
    {
        $messages = [];

        foreach($this->request->get('name') as $key => $value) {
            $messages["name.{$key}"]        = "The ". Constants::$languages[ $key ]. " :attribute is required";
            $messages["lore.{$key}"]        = "max:255";
            $messages["description.{$key}"] = "The ". Constants::$languages[ $key ]. " :attribute is required with the name";
            $messages["note.{$key}"]        = "max:255";
        }

        return $messages;
    }
}
