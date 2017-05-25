<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoriaFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Habilita o formulario a receber requisição
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */


    public function rules()
    {
        return [
            'nome' => 'required|max:256'
            'descricao' =>'max:256'
        ];
    }
}
