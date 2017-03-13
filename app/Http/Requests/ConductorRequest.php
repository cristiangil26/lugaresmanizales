<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConductorRequest extends FormRequest
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
        return ['nombre'=> 'min:4|max:30|required',
                'apellidos'=> 'min:3|max:40|required',
                'cédula'=> 'required|numeric',
                
            //
        ];
    }
}
