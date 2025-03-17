@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.kategori.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.kategoris.update", [$kategori->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="proses">{{ trans('cruds.kategori.fields.proses') }}</label>
                <input class="form-control {{ $errors->has('proses') ? 'is-invalid' : '' }}" type="text" name="proses" id="proses" value="{{ old('proses', $kategori->proses) }}" required>
                @if($errors->has('proses'))
                    <span class="text-danger">{{ $errors->first('proses') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kategori.fields.proses_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="stakeholder">{{ trans('cruds.kategori.fields.stakeholder') }}</label>
                <input class="form-control {{ $errors->has('stakeholder') ? 'is-invalid' : '' }}" type="text" name="stakeholder" id="stakeholder" value="{{ old('stakeholder', $kategori->stakeholder) }}" required>
                @if($errors->has('stakeholder'))
                    <span class="text-danger">{{ $errors->first('stakeholder') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kategori.fields.stakeholder_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('kriteria_hukum') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="kriteria_hukum" value="0">
                    <input class="form-check-input" type="checkbox" name="kriteria_hukum" id="kriteria_hukum" value="1" {{ $kategori->kriteria_hukum || old('kriteria_hukum', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="kriteria_hukum">{{ trans('cruds.kategori.fields.kriteria_hukum') }}</label>
                </div>
                @if($errors->has('kriteria_hukum'))
                    <span class="text-danger">{{ $errors->first('kriteria_hukum') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_hukum_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('kriteria_spesifik') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="kriteria_spesifik" value="0">
                    <input class="form-check-input" type="checkbox" name="kriteria_spesifik" id="kriteria_spesifik" value="1" {{ $kategori->kriteria_spesifik || old('kriteria_spesifik', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="kriteria_spesifik">{{ trans('cruds.kategori.fields.kriteria_spesifik') }}</label>
                </div>
                @if($errors->has('kriteria_spesifik'))
                    <span class="text-danger">{{ $errors->first('kriteria_spesifik') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_spesifik_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('kriteria_besar') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="kriteria_besar" value="0">
                    <input class="form-check-input" type="checkbox" name="kriteria_besar" id="kriteria_besar" value="1" {{ $kategori->kriteria_besar || old('kriteria_besar', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="kriteria_besar">{{ trans('cruds.kategori.fields.kriteria_besar') }}</label>
                </div>
                @if($errors->has('kriteria_besar'))
                    <span class="text-danger">{{ $errors->first('kriteria_besar') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_besar_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('kriteria_evaluasi') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="kriteria_evaluasi" value="0">
                    <input class="form-check-input" type="checkbox" name="kriteria_evaluasi" id="kriteria_evaluasi" value="1" {{ $kategori->kriteria_evaluasi || old('kriteria_evaluasi', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="kriteria_evaluasi">{{ trans('cruds.kategori.fields.kriteria_evaluasi') }}</label>
                </div>
                @if($errors->has('kriteria_evaluasi'))
                    <span class="text-danger">{{ $errors->first('kriteria_evaluasi') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_evaluasi_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('kriteria_cocok') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="kriteria_cocok" value="0">
                    <input class="form-check-input" type="checkbox" name="kriteria_cocok" id="kriteria_cocok" value="1" {{ $kategori->kriteria_cocok || old('kriteria_cocok', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="kriteria_cocok">{{ trans('cruds.kategori.fields.kriteria_cocok') }}</label>
                </div>
                @if($errors->has('kriteria_cocok'))
                    <span class="text-danger">{{ $errors->first('kriteria_cocok') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_cocok_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('kriteria_teknologi') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="kriteria_teknologi" value="0">
                    <input class="form-check-input" type="checkbox" name="kriteria_teknologi" id="kriteria_teknologi" value="1" {{ $kategori->kriteria_teknologi || old('kriteria_teknologi', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="kriteria_teknologi">{{ trans('cruds.kategori.fields.kriteria_teknologi') }}</label>
                </div>
                @if($errors->has('kriteria_teknologi'))
                    <span class="text-danger">{{ $errors->first('kriteria_teknologi') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_teknologi_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('kriteria_batas') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="kriteria_batas" value="0">
                    <input class="form-check-input" type="checkbox" name="kriteria_batas" id="kriteria_batas" value="1" {{ $kategori->kriteria_batas || old('kriteria_batas', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="kriteria_batas">{{ trans('cruds.kategori.fields.kriteria_batas') }}</label>
                </div>
                @if($errors->has('kriteria_batas'))
                    <span class="text-danger">{{ $errors->first('kriteria_batas') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_batas_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('pia') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="pia" value="0">
                    <input class="form-check-input" type="checkbox" name="pia" id="pia" value="1" {{ $kategori->pia || old('pia', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="pia">{{ trans('cruds.kategori.fields.pia') }}</label>
                </div>
                @if($errors->has('pia'))
                    <span class="text-danger">{{ $errors->first('pia') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kategori.fields.pia_helper') }}</span>
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