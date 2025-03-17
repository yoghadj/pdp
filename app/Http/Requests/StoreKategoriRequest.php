<?php

namespace App\Http\Requests;

use App\Models\Kategori;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreKategoriRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('kategori_create');
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
