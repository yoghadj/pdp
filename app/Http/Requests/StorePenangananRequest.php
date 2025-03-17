<?php

namespace App\Http\Requests;

use App\Models\Penanganan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePenangananRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('penanganan_create');
    }

    public function rules()
    {
        return [
            'min' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'max' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'risiko' => [
                'required',
            ],
            'penanganan' => [
                'string',
                'required',
            ],
            'opsi' => [
                'required',
            ],
        ];
    }
}
