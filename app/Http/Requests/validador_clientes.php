<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador_clientes extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required  | min:4  | string',
            'correo' => 'required | email ',
            'no_serie_ine' => 'numeric | required | min-digits:10 ',
           
        ];
    }
}
