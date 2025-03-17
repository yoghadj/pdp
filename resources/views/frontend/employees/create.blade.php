@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.employee.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.employees.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="nik">{{ trans('cruds.employee.fields.nik') }}</label>
                            <input class="form-control" type="text" name="nik" id="nik" value="{{ old('nik', '') }}" required>
                            @if($errors->has('nik'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nik') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employee.fields.nik_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.employee.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employee.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="position_code">{{ trans('cruds.employee.fields.position_code') }}</label>
                            <input class="form-control" type="text" name="position_code" id="position_code" value="{{ old('position_code', '') }}" required>
                            @if($errors->has('position_code'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('position_code') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employee.fields.position_code_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="branch_code">{{ trans('cruds.employee.fields.branch_code') }}</label>
                            <input class="form-control" type="text" name="branch_code" id="branch_code" value="{{ old('branch_code', '') }}" required>
                            @if($errors->has('branch_code'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('branch_code') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employee.fields.branch_code_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="position_name">{{ trans('cruds.employee.fields.position_name') }}</label>
                            <input class="form-control" type="text" name="position_name" id="position_name" value="{{ old('position_name', '') }}" required>
                            @if($errors->has('position_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('position_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employee.fields.position_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="branch_name">{{ trans('cruds.employee.fields.branch_name') }}</label>
                            <input class="form-control" type="text" name="branch_name" id="branch_name" value="{{ old('branch_name', '') }}" required>
                            @if($errors->has('branch_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('branch_name') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection