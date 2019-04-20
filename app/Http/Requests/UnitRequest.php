<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitRequest extends FormRequest
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
            'unit' => 'required|min:2|max:20'
        ];
    }


    public function messages()
    {
        return [
            'unit.required' => 'Satuan harus diisikan',
            'unit.min'  => 'Satuan harus setidaknya harus 2 huruf atau lebih',
            'unit.max'  => 'Satuan harus setidaknya harus 20 huruf atau kurang',
        ];
    }
}
