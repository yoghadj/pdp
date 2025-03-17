<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_create');
    }

    public function rules()
    {
        return [
            'nik' => [
                'string',
                'required',
                'unique:employees',
            ],
            'name' => [
                'string',
                'required',
            ],
            'position_code' => [
                'string',
                'required',
            ],
            'branch_code' => [
                'string',
                'required',
            ],
            'position_name' => [
                'string',
                'required',
            ],
            'branch_name' => [
                'string',
                'required',
            ],
        ];
    }
}
