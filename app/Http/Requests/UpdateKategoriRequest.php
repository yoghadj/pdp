<?php

namespace App\Http\Requests;

use App\Models\Kategori;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateKategoriRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('kategori_edit');
    }

    public function rules()
    {
        return [
            'proses' => [
                'string',
                'required',
            ],
            'stakeholder' => [
                'string',
                'required',
            ],
        ];
    }
}
