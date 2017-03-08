<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest; 
use App\Http\Requests\Request; //borrar

class FormReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

     public function rules()
    {
        return [
            "name"        =>      "required|between:5,60",
            "email"          =>      "required|between:5,60",
            "mobile"   =>      "required|between:5,25",
            "suggest"         =>      "required|between:1,255"
        ];
    }
 
    public function messages()
    {
        return [
            'name.between' => 'El campo nombre debe estar entre :min - :max. caracteres',
            'name.required' => 'El campo nombre es requerido!',
            'email.between' => 'El campo Email debe estar entre :min - :max. caracteres',
            'email.required' => 'El campo Email es requerido!',
            'mobile.between' => 'El campo Mobile debe estar entre :min - :max. caracteres',
            'mobile.required' => 'El campo Mobile es requerido!',
            'suggest.between' => 'El campo Sugerencia debe estar entre :min - :max. caracteres',
            'suggest.required' => 'El campo Sugerencia es requerido!',
        ];
    }
}