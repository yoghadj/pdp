@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.dampak.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.dampaks.update", [$dampak->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="nilai">{{ trans('cruds.dampak.fields.nilai') }}</label>
                <input class="form-control {{ $errors->has('nilai') ? 'is-invalid' : '' }}" type="number" name="nilai" id="nilai" value="{{ old('nilai', $dampak->nilai) }}" step="1" required>
                @if($errors->has('nilai'))
                    <span class="text-danger">{{ $errors->first('nilai') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dampak.fields.nilai_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="finansial">{{ trans('cruds.dampak.fields.finansial') }}</label>
                <input class="form-control {{ $errors->has('finansial') ? 'is-invalid' : '' }}" type="text" name="finansial" id="finansial" value="{{ old('finansial', $dampak->finansial) }}" required>
                @if($errors->has('finansial'))
                    <span class="text-danger">{{ $errors->first('finansial') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dampak.fields.finansial_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="compliance">{{ trans('cruds.dampak.fields.compliance') }}</label>
                <input class="form-control {{ $errors->has('compliance') ? 'is-invalid' : '' }}" type="text" name="compliance" id="compliance" value="{{ old('compliance', $dampak->compliance) }}" required>
                @if($errors->has('compliance'))
                    <span class="text-danger">{{ $errors->first('compliance') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dampak.fields.compliance_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="reputasi">{{ trans('cruds.dampak.fields.reputasi') }}</label>
                <input class="form-control {{ $errors->has('reputasi') ? 'is-invalid' : '' }}" type="text" name="reputasi" id="reputasi" value="{{ old('reputasi', $dampak->reputasi) }}" required>
                @if($errors->has('reputasi'))
                    <span class="text-danger">{{ $errors->first('reputasi') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dampak.fields.reputasi_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dampak">{{ trans('cruds.dampak.fields.dampak') }}</label>
                <input class="form-control {{ $errors->has('dampak') ? 'is-invalid' : '' }}" type="text" name="dampak" id="dampak" value="{{ old('dampak', $dampak->dampak) }}" required>
                @if($errors->has('dampak'))
                    <span class="text-danger">{{ $errors->first('dampak') }}</span>
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



@endsection