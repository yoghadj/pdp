<?php

namespace App\Http\Requests;

use App\Models\Dampak;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDampakRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('dampak_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:dampaks,id',
        ];
    }
}
