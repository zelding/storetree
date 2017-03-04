<?php

namespace App\Http\Requests;

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
        $names = $this->request->get('name');
        $keys  = array_keys($names);
        $rules = [];

        foreach($keys as $key) {
            $rules[ $key ] = [
                "name"        => "required|string|max:255",
                "lore"        => "string|max:255",
                "description" => "required|string|max:2048",
                "note"        => "string|max:255"
            ];
        }

        return $rules;
    }
}
