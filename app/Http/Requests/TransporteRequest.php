<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransporteRequest extends FormRequest
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
        return ['origen'=> 'min:4|max:200|required',
                'destino'=> 'min:4|max:200|required',
                'nombreRuta'=>'min:4|max:10'
                
            //
        ];
    }
}
