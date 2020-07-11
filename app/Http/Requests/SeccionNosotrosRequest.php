<?php

namespace bluemax\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeccionNosotrosRequest extends FormRequest
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
            "titulo"=>'required|String|max:100',
            'descripcion'=>'required|String|max:254',
            'imagen'=>'image',
            'icono'=>'image'
        ];
    }
}
