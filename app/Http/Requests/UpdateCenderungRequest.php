<?php

namespace App\Http\Requests;

use App\Models\Cenderung;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCenderungRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cenderung_edit');
    }

    public function rules()
    {
        return [
            'nilai' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'pola' => [
                'string',
                'required',
            ],
            'kemungkinan' => [
                'string',
                'required',
            ],
        ];
    }
}
