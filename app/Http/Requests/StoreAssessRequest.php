<?php

namespace App\Http\Requests;

use App\Models\Assess;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAssessRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('assess_create');
    }

    public function rules()
    {
        return [
            'proses_id' => [
                'required',
                'integer',
            ],
            'isu' => [
                'string',
                'required',
            ],
            'risiko' => [
                'string',
                'required',
            ],
            'nilai_kemungkinan_id' => [
                'required',
                'integer',
            ],
            'nilai_dampak_id' => [
                'required',
                'integer',
            ],
            'tindakan_pengendalian' => [
                'string',
                'nullable',
            ],
            'tinjut_penanganan' => [
                'string',
                'nullable',
            ],
            'persetujuan_tindakan' => [
                'string',
                'nullable',
            ],
            'target_penyelesaian' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'penanggung_jawab' => [
                'string',
                'nullable',
            ],
            'tinjut_residual' => [
                'string',
                'nullable',
            ],
        ];
    }
}
