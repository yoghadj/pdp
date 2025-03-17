<?php

namespace App\Http\Requests;

use App\Models\Dampak;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDampakRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('dampak_edit');
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
            'finansial' => [
                'string',
                'required',
            ],
            'compliance' => [
                'string',
                'required',
            ],
            'reputasi' => [
                'string',
                'required',
            ],
            'dampak' => [
                'string',
                'required',
            ],
        ];
    }
}
