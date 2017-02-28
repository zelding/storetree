<?php
/**
 * Created by PhpStorm.
 * User: Lyozsi
 * Date: 2017. 02. 28.
 * Time: 18:50
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreItemStat extends FormRequest
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
            "new_stat_value" => "required_with:new_stat|distinct",
        ];
    }
}