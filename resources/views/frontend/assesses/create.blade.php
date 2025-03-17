@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.assess.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.assesses.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="proses_id">{{ trans('cruds.assess.fields.proses') }}</label>
                            <select class="form-control select2" name="proses_id" id="proses_id" required>
                                @foreach($proses as $id => $entry)
                                    <option value="{{ $id }}" {{ old('proses_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('proses'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('proses') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.proses_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="isu">{{ trans('cruds.assess.fields.isu') }}</label>
                            <input class="form-control" type="text" name="isu" id="isu" value="{{ old('isu', '') }}" required>
                            @if($errors->has('isu'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('isu') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.isu_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="risiko">{{ trans('cruds.assess.fields.risiko') }}</label>
                            <input class="form-control" type="text" name="risiko" id="risiko" value="{{ old('risiko', '') }}" required>
                            @if($errors->has('risiko'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('risiko') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.risiko_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="nilai_kemungkinan_id">{{ trans('cruds.assess.fields.nilai_kemungkinan') }}</label>
                            <select class="form-control select2" name="nilai_kemungkinan_id" id="nilai_kemungkinan_id" required>
                                @foreach($nilai_kemungkinans as $id => $entry)
                                    <option value="{{ $id }}" {{ old('nilai_kemungkinan_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('nilai_kemungkinan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nilai_kemungkinan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.nilai_kemungkinan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="nilai_dampak_id">{{ trans('cruds.assess.fields.nilai_dampak') }}</label>
                            <select class="form-control select2" name="nilai_dampak_id" id="nilai_dampak_id" required>
                                @foreach($nilai_dampaks as $id => $entry)
                                    <option value="{{ $id }}" {{ old('nilai_dampak_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('nilai_dampak'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nilai_dampak') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.nilai_dampak_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="tindakan_pengendalian">{{ trans('cruds.assess.fields.tindakan_pengendalian') }}</label>
                            <input class="form-control" type="text" name="tindakan_pengendalian" id="tindakan_pengendalian" value="{{ old('tindakan_pengendalian', '') }}">
                            @if($errors->has('tindakan_pengendalian'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tindakan_pengendalian') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.tindakan_pengendalian_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nilai_kontrol_kemungkinan_id">{{ trans('cruds.assess.fields.nilai_kontrol_kemungkinan') }}</label>
                            <select class="form-control select2" name="nilai_kontrol_kemungkinan_id" id="nilai_kontrol_kemungkinan_id">
                                @foreach($nilai_kontrol_kemungkinans as $id => $entry)
                                    <option value="{{ $id }}" {{ old('nilai_kontrol_kemungkinan_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('nilai_kontrol_kemungkinan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nilai_kontrol_kemungkinan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.nilai_kontrol_kemungkinan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nilai_kontrol_dampak_id">{{ trans('cruds.assess.fields.nilai_kontrol_dampak') }}</label>
                            <select class="form-control select2" name="nilai_kontrol_dampak_id" id="nilai_kontrol_dampak_id">
                                @foreach($nilai_kontrol_dampaks as $id => $entry)
                                    <option value="{{ $id }}" {{ old('nilai_kontrol_dampak_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('nilai_kontrol_dampak'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nilai_kontrol_dampak') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.nilai_kontrol_dampak_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.assess.fields.tindakan') }}</label>
                            <select class="form-control" name="tindakan" id="tindakan">
                                <option value disabled {{ old('tindakan', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Assess::TINDAKAN_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('tindakan', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('tindakan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tindakan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.tindakan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="tinjut_penanganan">{{ trans('cruds.assess.fields.tinjut_penanganan') }}</label>
                            <input class="form-control" type="text" name="tinjut_penanganan" id="tinjut_penanganan" value="{{ old('tinjut_penanganan', '') }}">
                            @if($errors->has('tinjut_penanganan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tinjut_penanganan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.tinjut_penanganan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="persetujuan_tindakan">{{ trans('cruds.assess.fields.persetujuan_tindakan') }}</label>
                            <input class="form-control" type="text" name="persetujuan_tindakan" id="persetujuan_tindakan" value="{{ old('persetujuan_tindakan', '') }}">
                            @if($errors->has('persetujuan_tindakan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('persetujuan_tindakan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.persetujuan_tindakan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="target_penyelesaian">{{ trans('cruds.assess.fields.target_penyelesaian') }}</label>
                            <input class="form-control date" type="text" name="target_penyelesaian" id="target_penyelesaian" value="{{ old('target_penyelesaian') }}">
                            @if($errors->has('target_penyelesaian'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('target_penyelesaian') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.target_penyelesaian_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.assess.fields.status') }}</label>
                            <select class="form-control" name="status" id="status">
                                <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Assess::STATUS_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="penanggung_jawab">{{ trans('cruds.assess.fields.penanggung_jawab') }}</label>
                            <input class="form-control" type="text" name="penanggung_jawab" id="penanggung_jawab" value="{{ old('penanggung_jawab', '') }}">
                            @if($errors->has('penanggung_jawab'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('penanggung_jawab') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.penanggung_jawab_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nilai_residu_kemungkinan_id">{{ trans('cruds.assess.fields.nilai_residu_kemungkinan') }}</label>
                            <select class="form-control select2" name="nilai_residu_kemungkinan_id" id="nilai_residu_kemungkinan_id">
                                @foreach($nilai_residu_kemungkinans as $id => $entry)
                                    <option value="{{ $id }}" {{ old('nilai_residu_kemungkinan_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('nilai_residu_kemungkinan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nilai_residu_kemungkinan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.nilai_residu_kemungkinan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nilai_residu_dampak_id">{{ trans('cruds.assess.fields.nilai_residu_dampak') }}</label>
                            <select class="form-control select2" name="nilai_residu_dampak_id" id="nilai_residu_dampak_id">
                                @foreach($nilai_residu_dampaks as $id => $entry)
                                    <option value="{{ $id }}" {{ old('nilai_residu_dampak_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('nilai_residu_dampak'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nilai_residu_dampak') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.nilai_residu_dampak_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.assess.fields.tindakan_residu') }}</label>
                            <select class="form-control" name="tindakan_residu" id="tindakan_residu">
                                <option value disabled {{ old('tindakan_residu', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Assess::TINDAKAN_RESIDU_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('tindakan_residu', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('tindakan_residu'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tindakan_residu') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.tindakan_residu_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="tinjut_residual">{{ trans('cruds.assess.fields.tinjut_residual') }}</label>
                            <input class="form-control" type="text" name="tinjut_residual" id="tinjut_residual" value="{{ old('tinjut_residual', '') }}">
                            @if($errors->has('tinjut_residual'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tinjut_residual') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assess.fields.tinjut_residual_helper') }}</span>
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