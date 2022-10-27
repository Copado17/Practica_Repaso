<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador extends FormRequest
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
            'ISBN' => 'required | numeric | min:13',
             'Titulo' => 'required |min:3',
                'Autor' => 'required | min:3',
                'Paginas' => 'required | numeric',
                'Editorial' => 'required |min:3',
             'Email' => 'required | email'
        ];
    }
}
