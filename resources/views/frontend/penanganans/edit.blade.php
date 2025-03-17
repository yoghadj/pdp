@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.penanganan.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.penanganans.update", [$penanganan->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="min">{{ trans('cruds.penanganan.fields.min') }}</label>
                            <input class="form-control" type="number" name="min" id="min" value="{{ old('min', $penanganan->min) }}" step="1" required>
                            @if($errors->has('min'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('min') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.penanganan.fields.min_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="max">{{ trans('cruds.penanganan.fields.max') }}</label>
                            <input class="form-control" type="number" name="max" id="max" value="{{ old('max', $penanganan->max) }}" step="1" required>
                            @if($errors->has('max'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('max') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.penanganan.fields.max_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.penanganan.fields.risiko') }}</label>
                            <select class="form-control" name="risiko" id="risiko" required>
                                <option value disabled {{ old('risiko', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Penanganan::RISIKO_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('risiko', $penanganan->risiko) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('risiko'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('risiko') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.penanganan.fields.risiko_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="penanganan">{{ trans('cruds.penanganan.fields.penanganan') }}</label>
                            <input class="form-control" type="text" name="penanganan" id="penanganan" value="{{ old('penanganan', $penanganan->penanganan) }}" required>
                            @if($errors->has('penanganan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('penanganan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.penanganan.fields.penanganan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.penanganan.fields.opsi') }}</label>
                            <select class="form-control" name="opsi" id="opsi" required>
                                <option value disabled {{ old('opsi', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Penanganan::OPSI_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('opsi', $penanganan->opsi) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('opsi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('opsi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.penanganan.fields.opsi_helper') }}</span>
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