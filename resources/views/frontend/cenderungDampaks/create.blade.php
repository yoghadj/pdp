@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.cenderungDampak.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.cenderung-dampaks.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="cenderung_id">{{ trans('cruds.cenderungDampak.fields.cenderung') }}</label>
                            <select class="form-control select2" name="cenderung_id" id="cenderung_id" required>
                                @foreach($cenderungs as $id => $entry)
                                    <option value="{{ $id }}" {{ old('cenderung_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('cenderung'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cenderung') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.cenderungDampak.fields.cenderung_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="dampak_id">{{ trans('cruds.cenderungDampak.fields.dampak') }}</label>
                            <select class="form-control select2" name="dampak_id" id="dampak_id" required>
                                @foreach($dampaks as $id => $entry)
                                    <option value="{{ $id }}" {{ old('dampak_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('dampak'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('dampak') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.cenderungDampak.fields.dampak_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="nilai">{{ trans('cruds.cenderungDampak.fields.nilai') }}</label>
                            <input class="form-control" type="number" name="nilai" id="nilai" value="{{ old('nilai', '') }}" step="1" required>
                            @if($errors->has('nilai'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nilai') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection