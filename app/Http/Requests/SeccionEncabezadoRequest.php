<?php

namespace bluemax\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeccionEncabezadoRequest extends FormRequest
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
            //
            "titulo"=>"required|String|max:100",
            "descripcion"=>"required|String",
            "imagen"=>"image",
            "posicion"=>"required|String|max:1",

        ];
    }
}
