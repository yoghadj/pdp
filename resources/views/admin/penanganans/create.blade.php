@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.penanganan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.penanganans.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="min">{{ trans('cruds.penanganan.fields.min') }}</label>
                <input class="form-control {{ $errors->has('min') ? 'is-invalid' : '' }}" type="number" name="min" id="min" value="{{ old('min', '') }}" step="1" required>
                @if($errors->has('min'))
                    <span class="text-danger">{{ $errors->first('min') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.penanganan.fields.min_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="max">{{ trans('cruds.penanganan.fields.max') }}</label>
                <input class="form-control {{ $errors->has('max') ? 'is-invalid' : '' }}" type="number" name="max" id="max" value="{{ old('max', '') }}" step="1" required>
                @if($errors->has('max'))
                    <span class="text-danger">{{ $errors->first('max') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.penanganan.fields.max_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.penanganan.fields.risiko') }}</label>
                <select class="form-control {{ $errors->has('risiko') ? 'is-invalid' : '' }}" name="risiko" id="risiko" required>
                    <option value disabled {{ old('risiko', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Penanganan::RISIKO_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('risiko', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('risiko'))
                    <span class="text-danger">{{ $errors->first('risiko') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.penanganan.fields.risiko_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="penanganan">{{ trans('cruds.penanganan.fields.penanganan') }}</label>
                <input class="form-control {{ $errors->has('penanganan') ? 'is-invalid' : '' }}" type="text" name="penanganan" id="penanganan" value="{{ old('penanganan', '') }}" required>
                @if($errors->has('penanganan'))
                    <span class="text-danger">{{ $errors->first('penanganan') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.penanganan.fields.penanganan_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.penanganan.fields.opsi') }}</label>
                <select class="form-control {{ $errors->has('opsi') ? 'is-invalid' : '' }}" name="opsi" id="opsi" required>
                    <option value disabled {{ old('opsi', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Penanganan::OPSI_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('opsi', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('opsi'))
                    <span class="text-danger">{{ $errors->first('opsi') }}</span>
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



@endsection