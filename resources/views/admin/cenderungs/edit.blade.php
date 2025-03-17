@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.cenderung.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.cenderungs.update", [$cenderung->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="nilai">{{ trans('cruds.cenderung.fields.nilai') }}</label>
                <input class="form-control {{ $errors->has('nilai') ? 'is-invalid' : '' }}" type="number" name="nilai" id="nilai" value="{{ old('nilai', $cenderung->nilai) }}" step="1" required>
                @if($errors->has('nilai'))
                    <span class="text-danger">{{ $errors->first('nilai') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cenderung.fields.nilai_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="pola">{{ trans('cruds.cenderung.fields.pola') }}</label>
                <input class="form-control {{ $errors->has('pola') ? 'is-invalid' : '' }}" type="text" name="pola" id="pola" value="{{ old('pola', $cenderung->pola) }}" required>
                @if($errors->has('pola'))
                    <span class="text-danger">{{ $errors->first('pola') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cenderung.fields.pola_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="kemungkinan">{{ trans('cruds.cenderung.fields.kemungkinan') }}</label>
                <input class="form-control {{ $errors->has('kemungkinan') ? 'is-invalid' : '' }}" type="text" name="kemungkinan" id="kemungkinan" value="{{ old('kemungkinan', $cenderung->kemungkinan) }}" required>
                @if($errors->has('kemungkinan'))
                    <span class="text-danger">{{ $errors->first('kemungkinan') }}</span>
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



@endsection