<?php

namespace App\Http\Requests;

use App\Models\Ropa;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRopaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('ropa_create');
    }

    public function rules()
    {
        return [
            'unit_kerja' => [
                'string',
                'required',
            ],
            'sub_unit' => [
                'string',
                'required',
            ],
            'fungsi' => [
                'string',
                'required',
            ],
            'pic' => [
                'string',
                'required',
            ],
            'proses_bisnis' => [
                'string',
                'required',
            ],
            'peran' => [
                'required',
            ],
            'jenis_data' => [
                'required',
            ],
            'umum_kombinasi' => [
                'string',
                'required',
            ],
            'spesifik_lain' => [
                'string',
                'nullable',
            ],
            'tujuan' => [
                'string',
                'required',
            ],
            'owner' => [
                'string',
                'required',
            ],
            'sumber' => [
                'string',
                'required',
            ],
            'aman_lainnya' => [
                'string',
                'nullable',
            ],
            'aliran_input' => [
                'string',
                'required',
            ],
            'aliran_output' => [
                'string',
                'required',
            ],
            'transfer_tujuan' => [
                'string',
                'nullable',
            ],
            'retensi_periode' => [
                'string',
                'required',
            ],
            'retensi_metode' => [
                'string',
                'required',
            ],
            'konsen_wajib' => [
                'string',
                'required',
            ],
            'konsen_simpan' => [
                'required',
            ],
            'aplikasi' => [
                'string',
                'nullable',
            ],
        ];
    }
}
