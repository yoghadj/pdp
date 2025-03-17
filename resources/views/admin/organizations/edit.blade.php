@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.organization.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.organizations.update", [$organization->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.organization.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $organization->code) }}" required>
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.organization.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.organization.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $organization->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.organization.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="head_code">{{ trans('cruds.organization.fields.head_code') }}</label>
                <input class="form-control {{ $errors->has('head_code') ? 'is-invalid' : '' }}" type="text" name="head_code" id="head_code" value="{{ old('head_code', $organization->head_code) }}" required>
                @if($errors->has('head_code'))
                    <span class="text-danger">{{ $errors->first('head_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.organization.fields.head_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="branch_code">{{ trans('cruds.organization.fields.branch_code') }}</label>
                <input class="form-control {{ $errors->has('branch_code') ? 'is-invalid' : '' }}" type="text" name="branch_code" id="branch_code" value="{{ old('branch_code', $organization->branch_code) }}" required>
                @if($errors->has('branch_code'))
                    <span class="text-danger">{{ $errors->first('branch_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.organization.fields.branch_code_helper') }}</span>
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