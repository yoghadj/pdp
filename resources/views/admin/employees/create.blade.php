@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.employee.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employees.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="nik">{{ trans('cruds.employee.fields.nik') }}</label>
                <input class="form-control {{ $errors->has('nik') ? 'is-invalid' : '' }}" type="text" name="nik" id="nik" value="{{ old('nik', '') }}" required>
                @if($errors->has('nik'))
                    <span class="text-danger">{{ $errors->first('nik') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.nik_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.employee.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="position_code">{{ trans('cruds.employee.fields.position_code') }}</label>
                <input class="form-control {{ $errors->has('position_code') ? 'is-invalid' : '' }}" type="text" name="position_code" id="position_code" value="{{ old('position_code', '') }}" required>
                @if($errors->has('position_code'))
                    <span class="text-danger">{{ $errors->first('position_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.position_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="branch_code">{{ trans('cruds.employee.fields.branch_code') }}</label>
                <input class="form-control {{ $errors->has('branch_code') ? 'is-invalid' : '' }}" type="text" name="branch_code" id="branch_code" value="{{ old('branch_code', '') }}" required>
                @if($errors->has('branch_code'))
                    <span class="text-danger">{{ $errors->first('branch_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.branch_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="position_name">{{ trans('cruds.employee.fields.position_name') }}</label>
                <input class="form-control {{ $errors->has('position_name') ? 'is-invalid' : '' }}" type="text" name="position_name" id="position_name" value="{{ old('position_name', '') }}" required>
                @if($errors->has('position_name'))
                    <span class="text-danger">{{ $errors->first('position_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.position_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="branch_name">{{ trans('cruds.employee.fields.branch_name') }}</label>
                <input class="form-control {{ $errors->has('branch_name') ? 'is-invalid' : '' }}" type="text" name="branch_name" id="branch_name" value="{{ old('branch_name', '') }}" required>
                @if($errors->has('branch_name'))
                    <span class="text-danger">{{ $errors->first('branch_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.branch_name_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection