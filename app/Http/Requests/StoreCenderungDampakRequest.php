<?php

namespace App\Http\Requests;

use App\Models\CenderungDampak;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCenderungDampakRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cenderung_dampak_create');
    }

    public function rules()
    {
        return [
            'cenderung_id' => [
                'required',
                'integer',
            ],
            'dampak_id' => [
                'required',
                'integer',
            ],
            'nilai' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
