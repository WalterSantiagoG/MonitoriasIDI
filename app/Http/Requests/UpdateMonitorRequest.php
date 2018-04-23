<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMonitorRequest extends FormRequest
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
            'nombres' => 'min:4|max:50|required',
            'apellidos' => 'min:4|max:50|required',
            'programa_academico' => 'min:4|max:50|required',
            'semestre' => 'numeric|required|min:1|max:10',
            'cedula' => 'required|min:5|max:10',
            'email' => 'min:7|max:50|required',
            'telefono' => 'min:7|max:10|required',
            'celular' => 'min:7|max:10|required'
        ];
    }
}
