@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.dampak.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.dampaks.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="nilai">{{ trans('cruds.dampak.fields.nilai') }}</label>
                            <input class="form-control" type="number" name="nilai" id="nilai" value="{{ old('nilai', '') }}" step="1" required>
                            @if($errors->has('nilai'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nilai') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.dampak.fields.nilai_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="finansial">{{ trans('cruds.dampak.fields.finansial') }}</label>
                            <input class="form-control" type="text" name="finansial" id="finansial" value="{{ old('finansial', '') }}" required>
                            @if($errors->has('finansial'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('finansial') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.dampak.fields.finansial_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="compliance">{{ trans('cruds.dampak.fields.compliance') }}</label>
                            <input class="form-control" type="text" name="compliance" id="compliance" value="{{ old('compliance', '') }}" required>
                            @if($errors->has('compliance'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('compliance') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.dampak.fields.compliance_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="reputasi">{{ trans('cruds.dampak.fields.reputasi') }}</label>
                            <input class="form-control" type="text" name="reputasi" id="reputasi" value="{{ old('reputasi', '') }}" required>
                            @if($errors->has('reputasi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('reputasi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.dampak.fields.reputasi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="dampak">{{ trans('cruds.dampak.fields.dampak') }}</label>
                            <input class="form-control" type="text" name="dampak" id="dampak" value="{{ old('dampak', '') }}" required>
                            @if($errors->has('dampak'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('dampak') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.dampak.fields.dampak_helper') }}</span>
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