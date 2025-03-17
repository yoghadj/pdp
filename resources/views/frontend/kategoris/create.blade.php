@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.kategori.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.kategoris.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="proses">{{ trans('cruds.kategori.fields.proses') }}</label>
                            <input class="form-control" type="text" name="proses" id="proses" value="{{ old('proses', '') }}" required>
                            @if($errors->has('proses'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('proses') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.kategori.fields.proses_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="stakeholder">{{ trans('cruds.kategori.fields.stakeholder') }}</label>
                            <input class="form-control" type="text" name="stakeholder" id="stakeholder" value="{{ old('stakeholder', '') }}" required>
                            @if($errors->has('stakeholder'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('stakeholder') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.kategori.fields.stakeholder_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="kriteria_hukum" value="0">
                                <input type="checkbox" name="kriteria_hukum" id="kriteria_hukum" value="1" {{ old('kriteria_hukum', 0) == 1 ? 'checked' : '' }}>
                                <label for="kriteria_hukum">{{ trans('cruds.kategori.fields.kriteria_hukum') }}</label>
                            </div>
                            @if($errors->has('kriteria_hukum'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('kriteria_hukum') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_hukum_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="kriteria_spesifik" value="0">
                                <input type="checkbox" name="kriteria_spesifik" id="kriteria_spesifik" value="1" {{ old('kriteria_spesifik', 0) == 1 ? 'checked' : '' }}>
                                <label for="kriteria_spesifik">{{ trans('cruds.kategori.fields.kriteria_spesifik') }}</label>
                            </div>
                            @if($errors->has('kriteria_spesifik'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('kriteria_spesifik') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_spesifik_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="kriteria_besar" value="0">
                                <input type="checkbox" name="kriteria_besar" id="kriteria_besar" value="1" {{ old('kriteria_besar', 0) == 1 ? 'checked' : '' }}>
                                <label for="kriteria_besar">{{ trans('cruds.kategori.fields.kriteria_besar') }}</label>
                            </div>
                            @if($errors->has('kriteria_besar'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('kriteria_besar') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_besar_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="kriteria_evaluasi" value="0">
                                <input type="checkbox" name="kriteria_evaluasi" id="kriteria_evaluasi" value="1" {{ old('kriteria_evaluasi', 0) == 1 ? 'checked' : '' }}>
                                <label for="kriteria_evaluasi">{{ trans('cruds.kategori.fields.kriteria_evaluasi') }}</label>
                            </div>
                            @if($errors->has('kriteria_evaluasi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('kriteria_evaluasi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_evaluasi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="kriteria_cocok" value="0">
                                <input type="checkbox" name="kriteria_cocok" id="kriteria_cocok" value="1" {{ old('kriteria_cocok', 0) == 1 ? 'checked' : '' }}>
                                <label for="kriteria_cocok">{{ trans('cruds.kategori.fields.kriteria_cocok') }}</label>
                            </div>
                            @if($errors->has('kriteria_cocok'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('kriteria_cocok') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_cocok_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="kriteria_teknologi" value="0">
                                <input type="checkbox" name="kriteria_teknologi" id="kriteria_teknologi" value="1" {{ old('kriteria_teknologi', 0) == 1 ? 'checked' : '' }}>
                                <label for="kriteria_teknologi">{{ trans('cruds.kategori.fields.kriteria_teknologi') }}</label>
                            </div>
                            @if($errors->has('kriteria_teknologi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('kriteria_teknologi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_teknologi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="kriteria_batas" value="0">
                                <input type="checkbox" name="kriteria_batas" id="kriteria_batas" value="1" {{ old('kriteria_batas', 0) == 1 ? 'checked' : '' }}>
                                <label for="kriteria_batas">{{ trans('cruds.kategori.fields.kriteria_batas') }}</label>
                            </div>
                            @if($errors->has('kriteria_batas'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('kriteria_batas') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.kategori.fields.kriteria_batas_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="pia" value="0">
                                <input type="checkbox" name="pia" id="pia" value="1" {{ old('pia', 0) == 1 ? 'checked' : '' }}>
                                <label for="pia">{{ trans('cruds.kategori.fields.pia') }}</label>
                            </div>
                            @if($errors->has('pia'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('pia') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection