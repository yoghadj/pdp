<?php

namespace App\Http\Requests;

use App\Models\Ropa;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRopaRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('ropa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:ropas,id',
        ];
    }
}
