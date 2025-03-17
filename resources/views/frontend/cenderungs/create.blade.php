@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.cenderung.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.cenderungs.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="nilai">{{ trans('cruds.cenderung.fields.nilai') }}</label>
                            <input class="form-control" type="number" name="nilai" id="nilai" value="{{ old('nilai', '') }}" step="1" required>
                            @if($errors->has('nilai'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nilai') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.cenderung.fields.nilai_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="pola">{{ trans('cruds.cenderung.fields.pola') }}</label>
                            <input class="form-control" type="text" name="pola" id="pola" value="{{ old('pola', '') }}" required>
                            @if($errors->has('pola'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('pola') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.cenderung.fields.pola_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="kemungkinan">{{ trans('cruds.cenderung.fields.kemungkinan') }}</label>
                            <input class="form-control" type="text" name="kemungkinan" id="kemungkinan" value="{{ old('kemungkinan', '') }}" required>
                            @if($errors->has('kemungkinan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('kemungkinan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.cenderung.fields.kemungkinan_helper') }}</span>
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