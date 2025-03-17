@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.cenderungDampak.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.cenderung-dampaks.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="cenderung_id">{{ trans('cruds.cenderungDampak.fields.cenderung') }}</label>
                <select class="form-control select2 {{ $errors->has('cenderung') ? 'is-invalid' : '' }}" name="cenderung_id" id="cenderung_id" required>
                    @foreach($cenderungs as $id => $entry)
                        <option value="{{ $id }}" {{ old('cenderung_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('cenderung'))
                    <span class="text-danger">{{ $errors->first('cenderung') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cenderungDampak.fields.cenderung_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dampak_id">{{ trans('cruds.cenderungDampak.fields.dampak') }}</label>
                <select class="form-control select2 {{ $errors->has('dampak') ? 'is-invalid' : '' }}" name="dampak_id" id="dampak_id" required>
                    @foreach($dampaks as $id => $entry)
                        <option value="{{ $id }}" {{ old('dampak_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('dampak'))
                    <span class="text-danger">{{ $errors->first('dampak') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cenderungDampak.fields.dampak_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nilai">{{ trans('cruds.cenderungDampak.fields.nilai') }}</label>
                <input class="form-control {{ $errors->has('nilai') ? 'is-invalid' : '' }}" type="number" name="nilai" id="nilai" value="{{ old('nilai', '') }}" step="1" required>
                @if($errors->has('nilai'))
                    <span class="text-danger">{{ $errors->first('nilai') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cenderungDampak.fields.nilai_helper') }}</span>
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