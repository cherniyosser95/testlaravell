<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValideRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {// s'il return false ne laisse pas l'user d'acceder a la page et sa retourn ('forbidden')
       // dd($this->route());
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
            'content'=>'required|min:10'
            //
        ];
    }
}
