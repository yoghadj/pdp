@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.ropa.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.ropas.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="unit_kerja">{{ trans('cruds.ropa.fields.unit_kerja') }}</label>
                            <input class="form-control" type="text" name="unit_kerja" id="unit_kerja" value="{{ old('unit_kerja', '') }}" required>
                            @if($errors->has('unit_kerja'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('unit_kerja') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.unit_kerja_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="sub_unit">{{ trans('cruds.ropa.fields.sub_unit') }}</label>
                            <input class="form-control" type="text" name="sub_unit" id="sub_unit" value="{{ old('sub_unit', '') }}" required>
                            @if($errors->has('sub_unit'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('sub_unit') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.sub_unit_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="fungsi">{{ trans('cruds.ropa.fields.fungsi') }}</label>
                            <input class="form-control" type="text" name="fungsi" id="fungsi" value="{{ old('fungsi', '') }}" required>
                            @if($errors->has('fungsi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fungsi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.fungsi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="pic">{{ trans('cruds.ropa.fields.pic') }}</label>
                            <input class="form-control" type="text" name="pic" id="pic" value="{{ old('pic', '') }}" required>
                            @if($errors->has('pic'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('pic') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.pic_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="proses_bisnis">{{ trans('cruds.ropa.fields.proses_bisnis') }}</label>
                            <input class="form-control" type="text" name="proses_bisnis" id="proses_bisnis" value="{{ old('proses_bisnis', '') }}" required>
                            @if($errors->has('proses_bisnis'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('proses_bisnis') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.proses_bisnis_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.ropa.fields.peran') }}</label>
                            <select class="form-control" name="peran" id="peran" required>
                                <option value disabled {{ old('peran', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Ropa::PERAN_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('peran', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('peran'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('peran') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.peran_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.ropa.fields.jenis_data') }}</label>
                            <select class="form-control" name="jenis_data" id="jenis_data" required>
                                <option value disabled {{ old('jenis_data', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Ropa::JENIS_DATA_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('jenis_data', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('jenis_data'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jenis_data') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.jenis_data_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="umum_nama_lengkap" value="0">
                                <input type="checkbox" name="umum_nama_lengkap" id="umum_nama_lengkap" value="1" {{ old('umum_nama_lengkap', 0) == 1 ? 'checked' : '' }}>
                                <label for="umum_nama_lengkap">{{ trans('cruds.ropa.fields.umum_nama_lengkap') }}</label>
                            </div>
                            @if($errors->has('umum_nama_lengkap'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('umum_nama_lengkap') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.umum_nama_lengkap_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="umum_jenkel" value="0">
                                <input type="checkbox" name="umum_jenkel" id="umum_jenkel" value="1" {{ old('umum_jenkel', 0) == 1 ? 'checked' : '' }}>
                                <label for="umum_jenkel">{{ trans('cruds.ropa.fields.umum_jenkel') }}</label>
                            </div>
                            @if($errors->has('umum_jenkel'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('umum_jenkel') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.umum_jenkel_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="umum_kewarganegaraan" value="0">
                                <input type="checkbox" name="umum_kewarganegaraan" id="umum_kewarganegaraan" value="1" {{ old('umum_kewarganegaraan', 0) == 1 ? 'checked' : '' }}>
                                <label for="umum_kewarganegaraan">{{ trans('cruds.ropa.fields.umum_kewarganegaraan') }}</label>
                            </div>
                            @if($errors->has('umum_kewarganegaraan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('umum_kewarganegaraan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.umum_kewarganegaraan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="umum_agama" value="0">
                                <input type="checkbox" name="umum_agama" id="umum_agama" value="1" {{ old('umum_agama', 0) == 1 ? 'checked' : '' }}>
                                <label for="umum_agama">{{ trans('cruds.ropa.fields.umum_agama') }}</label>
                            </div>
                            @if($errors->has('umum_agama'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('umum_agama') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.umum_agama_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="umum_kawin" value="0">
                                <input type="checkbox" name="umum_kawin" id="umum_kawin" value="1" {{ old('umum_kawin', 0) == 1 ? 'checked' : '' }}>
                                <label for="umum_kawin">{{ trans('cruds.ropa.fields.umum_kawin') }}</label>
                            </div>
                            @if($errors->has('umum_kawin'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('umum_kawin') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.umum_kawin_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="umum_kombinasi">{{ trans('cruds.ropa.fields.umum_kombinasi') }}</label>
                            <input class="form-control" type="text" name="umum_kombinasi" id="umum_kombinasi" value="{{ old('umum_kombinasi', '') }}" required>
                            @if($errors->has('umum_kombinasi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('umum_kombinasi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.umum_kombinasi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="spesifik_sehat" value="0">
                                <input type="checkbox" name="spesifik_sehat" id="spesifik_sehat" value="1" {{ old('spesifik_sehat', 0) == 1 ? 'checked' : '' }}>
                                <label for="spesifik_sehat">{{ trans('cruds.ropa.fields.spesifik_sehat') }}</label>
                            </div>
                            @if($errors->has('spesifik_sehat'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('spesifik_sehat') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.spesifik_sehat_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="spesifik_biometrik" value="0">
                                <input type="checkbox" name="spesifik_biometrik" id="spesifik_biometrik" value="1" {{ old('spesifik_biometrik', 0) == 1 ? 'checked' : '' }}>
                                <label for="spesifik_biometrik">{{ trans('cruds.ropa.fields.spesifik_biometrik') }}</label>
                            </div>
                            @if($errors->has('spesifik_biometrik'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('spesifik_biometrik') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.spesifik_biometrik_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="spesifik_genetik" value="0">
                                <input type="checkbox" name="spesifik_genetik" id="spesifik_genetik" value="1" {{ old('spesifik_genetik', 0) == 1 ? 'checked' : '' }}>
                                <label for="spesifik_genetik">{{ trans('cruds.ropa.fields.spesifik_genetik') }}</label>
                            </div>
                            @if($errors->has('spesifik_genetik'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('spesifik_genetik') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.spesifik_genetik_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="spesifik_jahat" value="0">
                                <input type="checkbox" name="spesifik_jahat" id="spesifik_jahat" value="1" {{ old('spesifik_jahat', 0) == 1 ? 'checked' : '' }}>
                                <label for="spesifik_jahat">{{ trans('cruds.ropa.fields.spesifik_jahat') }}</label>
                            </div>
                            @if($errors->has('spesifik_jahat'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('spesifik_jahat') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.spesifik_jahat_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="spesifik_anak" value="0">
                                <input type="checkbox" name="spesifik_anak" id="spesifik_anak" value="1" {{ old('spesifik_anak', 0) == 1 ? 'checked' : '' }}>
                                <label for="spesifik_anak">{{ trans('cruds.ropa.fields.spesifik_anak') }}</label>
                            </div>
                            @if($errors->has('spesifik_anak'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('spesifik_anak') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.spesifik_anak_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="spesifik_uang" value="0">
                                <input type="checkbox" name="spesifik_uang" id="spesifik_uang" value="1" {{ old('spesifik_uang', 0) == 1 ? 'checked' : '' }}>
                                <label for="spesifik_uang">{{ trans('cruds.ropa.fields.spesifik_uang') }}</label>
                            </div>
                            @if($errors->has('spesifik_uang'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('spesifik_uang') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.spesifik_uang_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="spesifik_lain">{{ trans('cruds.ropa.fields.spesifik_lain') }}</label>
                            <input class="form-control" type="text" name="spesifik_lain" id="spesifik_lain" value="{{ old('spesifik_lain', '') }}">
                            @if($errors->has('spesifik_lain'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('spesifik_lain') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.spesifik_lain_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="format_elektronik" value="0">
                                <input type="checkbox" name="format_elektronik" id="format_elektronik" value="1" {{ old('format_elektronik', 0) == 1 ? 'checked' : '' }}>
                                <label for="format_elektronik">{{ trans('cruds.ropa.fields.format_elektronik') }}</label>
                            </div>
                            @if($errors->has('format_elektronik'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('format_elektronik') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.format_elektronik_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="format_nonelektronik" value="0">
                                <input type="checkbox" name="format_nonelektronik" id="format_nonelektronik" value="1" {{ old('format_nonelektronik', 0) == 1 ? 'checked' : '' }}>
                                <label for="format_nonelektronik">{{ trans('cruds.ropa.fields.format_nonelektronik') }}</label>
                            </div>
                            @if($errors->has('format_nonelektronik'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('format_nonelektronik') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.format_nonelektronik_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="tujuan">{{ trans('cruds.ropa.fields.tujuan') }}</label>
                            <input class="form-control" type="text" name="tujuan" id="tujuan" value="{{ old('tujuan', '') }}" required>
                            @if($errors->has('tujuan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tujuan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.tujuan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="owner">{{ trans('cruds.ropa.fields.owner') }}</label>
                            <input class="form-control" type="text" name="owner" id="owner" value="{{ old('owner', '') }}" required>
                            @if($errors->has('owner'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('owner') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.owner_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="sumber">{{ trans('cruds.ropa.fields.sumber') }}</label>
                            <input class="form-control" type="text" name="sumber" id="sumber" value="{{ old('sumber', '') }}" required>
                            @if($errors->has('sumber'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('sumber') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.sumber_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="simpan_divsendiri" value="0">
                                <input type="checkbox" name="simpan_divsendiri" id="simpan_divsendiri" value="1" {{ old('simpan_divsendiri', 0) == 1 ? 'checked' : '' }}>
                                <label for="simpan_divsendiri">{{ trans('cruds.ropa.fields.simpan_divsendiri') }}</label>
                            </div>
                            @if($errors->has('simpan_divsendiri'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('simpan_divsendiri') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.simpan_divsendiri_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="simpan_divlain" value="0">
                                <input type="checkbox" name="simpan_divlain" id="simpan_divlain" value="1" {{ old('simpan_divlain', 0) == 1 ? 'checked' : '' }}>
                                <label for="simpan_divlain">{{ trans('cruds.ropa.fields.simpan_divlain') }}</label>
                            </div>
                            @if($errors->has('simpan_divlain'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('simpan_divlain') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.simpan_divlain_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="simpan_vendor" value="0">
                                <input type="checkbox" name="simpan_vendor" id="simpan_vendor" value="1" {{ old('simpan_vendor', 0) == 1 ? 'checked' : '' }}>
                                <label for="simpan_vendor">{{ trans('cruds.ropa.fields.simpan_vendor') }}</label>
                            </div>
                            @if($errors->has('simpan_vendor'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('simpan_vendor') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.simpan_vendor_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="aman_akses" value="0">
                                <input type="checkbox" name="aman_akses" id="aman_akses" value="1" {{ old('aman_akses', 0) == 1 ? 'checked' : '' }}>
                                <label for="aman_akses">{{ trans('cruds.ropa.fields.aman_akses') }}</label>
                            </div>
                            @if($errors->has('aman_akses'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('aman_akses') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.aman_akses_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="aman_enkripsi" value="0">
                                <input type="checkbox" name="aman_enkripsi" id="aman_enkripsi" value="1" {{ old('aman_enkripsi', 0) == 1 ? 'checked' : '' }}>
                                <label for="aman_enkripsi">{{ trans('cruds.ropa.fields.aman_enkripsi') }}</label>
                            </div>
                            @if($errors->has('aman_enkripsi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('aman_enkripsi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.aman_enkripsi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="aman_otentikasi" value="0">
                                <input type="checkbox" name="aman_otentikasi" id="aman_otentikasi" value="1" {{ old('aman_otentikasi', 0) == 1 ? 'checked' : '' }}>
                                <label for="aman_otentikasi">{{ trans('cruds.ropa.fields.aman_otentikasi') }}</label>
                            </div>
                            @if($errors->has('aman_otentikasi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('aman_otentikasi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.aman_otentikasi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="aman_lainnya">{{ trans('cruds.ropa.fields.aman_lainnya') }}</label>
                            <input class="form-control" type="text" name="aman_lainnya" id="aman_lainnya" value="{{ old('aman_lainnya', '') }}">
                            @if($errors->has('aman_lainnya'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('aman_lainnya') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.aman_lainnya_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="proses_olehkumpul" value="0">
                                <input type="checkbox" name="proses_olehkumpul" id="proses_olehkumpul" value="1" {{ old('proses_olehkumpul', 0) == 1 ? 'checked' : '' }}>
                                <label for="proses_olehkumpul">{{ trans('cruds.ropa.fields.proses_olehkumpul') }}</label>
                            </div>
                            @if($errors->has('proses_olehkumpul'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('proses_olehkumpul') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.proses_olehkumpul_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="proses_olahanalisis" value="0">
                                <input type="checkbox" name="proses_olahanalisis" id="proses_olahanalisis" value="1" {{ old('proses_olahanalisis', 0) == 1 ? 'checked' : '' }}>
                                <label for="proses_olahanalisis">{{ trans('cruds.ropa.fields.proses_olahanalisis') }}</label>
                            </div>
                            @if($errors->has('proses_olahanalisis'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('proses_olahanalisis') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.proses_olahanalisis_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="proses_simpan" value="0">
                                <input type="checkbox" name="proses_simpan" id="proses_simpan" value="1" {{ old('proses_simpan', 0) == 1 ? 'checked' : '' }}>
                                <label for="proses_simpan">{{ trans('cruds.ropa.fields.proses_simpan') }}</label>
                            </div>
                            @if($errors->has('proses_simpan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('proses_simpan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.proses_simpan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="proses_baik" value="0">
                                <input type="checkbox" name="proses_baik" id="proses_baik" value="1" {{ old('proses_baik', 0) == 1 ? 'checked' : '' }}>
                                <label for="proses_baik">{{ trans('cruds.ropa.fields.proses_baik') }}</label>
                            </div>
                            @if($errors->has('proses_baik'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('proses_baik') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.proses_baik_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="proses_tampil" value="0">
                                <input type="checkbox" name="proses_tampil" id="proses_tampil" value="1" {{ old('proses_tampil', 0) == 1 ? 'checked' : '' }}>
                                <label for="proses_tampil">{{ trans('cruds.ropa.fields.proses_tampil') }}</label>
                            </div>
                            @if($errors->has('proses_tampil'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('proses_tampil') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.proses_tampil_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="proses_hapus" value="0">
                                <input type="checkbox" name="proses_hapus" id="proses_hapus" value="1" {{ old('proses_hapus', 0) == 1 ? 'checked' : '' }}>
                                <label for="proses_hapus">{{ trans('cruds.ropa.fields.proses_hapus') }}</label>
                            </div>
                            @if($errors->has('proses_hapus'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('proses_hapus') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.proses_hapus_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="aliran_input">{{ trans('cruds.ropa.fields.aliran_input') }}</label>
                            <input class="form-control" type="text" name="aliran_input" id="aliran_input" value="{{ old('aliran_input', '') }}" required>
                            @if($errors->has('aliran_input'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('aliran_input') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.aliran_input_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="aliran_output">{{ trans('cruds.ropa.fields.aliran_output') }}</label>
                            <input class="form-control" type="text" name="aliran_output" id="aliran_output" value="{{ old('aliran_output', '') }}" required>
                            @if($errors->has('aliran_output'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('aliran_output') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.aliran_output_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="transfer_tujuan">{{ trans('cruds.ropa.fields.transfer_tujuan') }}</label>
                            <input class="form-control" type="text" name="transfer_tujuan" id="transfer_tujuan" value="{{ old('transfer_tujuan', '') }}">
                            @if($errors->has('transfer_tujuan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('transfer_tujuan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.transfer_tujuan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.ropa.fields.transfer_tipe') }}</label>
                            <select class="form-control" name="transfer_tipe" id="transfer_tipe">
                                <option value disabled {{ old('transfer_tipe', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Ropa::TRANSFER_TIPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('transfer_tipe', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('transfer_tipe'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('transfer_tipe') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.transfer_tipe_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.ropa.fields.transfer_metode') }}</label>
                            <select class="form-control" name="transfer_metode" id="transfer_metode">
                                <option value disabled {{ old('transfer_metode', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Ropa::TRANSFER_METODE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('transfer_metode', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('transfer_metode'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('transfer_metode') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.transfer_metode_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="retensi_periode">{{ trans('cruds.ropa.fields.retensi_periode') }}</label>
                            <input class="form-control" type="text" name="retensi_periode" id="retensi_periode" value="{{ old('retensi_periode', '') }}" required>
                            @if($errors->has('retensi_periode'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('retensi_periode') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.retensi_periode_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="retensi_metode">{{ trans('cruds.ropa.fields.retensi_metode') }}</label>
                            <input class="form-control" type="text" name="retensi_metode" id="retensi_metode" value="{{ old('retensi_metode', '') }}" required>
                            @if($errors->has('retensi_metode'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('retensi_metode') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.retensi_metode_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="konsen_kumpul" value="0">
                                <input type="checkbox" name="konsen_kumpul" id="konsen_kumpul" value="1" {{ old('konsen_kumpul', 0) == 1 ? 'checked' : '' }}>
                                <label for="konsen_kumpul">{{ trans('cruds.ropa.fields.konsen_kumpul') }}</label>
                            </div>
                            @if($errors->has('konsen_kumpul'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('konsen_kumpul') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.konsen_kumpul_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.ropa.fields.konsen_mekanisme') }}</label>
                            <select class="form-control" name="konsen_mekanisme" id="konsen_mekanisme">
                                <option value disabled {{ old('konsen_mekanisme', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Ropa::KONSEN_MEKANISME_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('konsen_mekanisme', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('konsen_mekanisme'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('konsen_mekanisme') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.konsen_mekanisme_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="konsen_wajib">{{ trans('cruds.ropa.fields.konsen_wajib') }}</label>
                            <input class="form-control" type="text" name="konsen_wajib" id="konsen_wajib" value="{{ old('konsen_wajib', '') }}" required>
                            @if($errors->has('konsen_wajib'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('konsen_wajib') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.konsen_wajib_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="konsen_aturan" value="0">
                                <input type="checkbox" name="konsen_aturan" id="konsen_aturan" value="1" {{ old('konsen_aturan', 0) == 1 ? 'checked' : '' }}>
                                <label for="konsen_aturan">{{ trans('cruds.ropa.fields.konsen_aturan') }}</label>
                            </div>
                            @if($errors->has('konsen_aturan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('konsen_aturan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.konsen_aturan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="konsen_vital" value="0">
                                <input type="checkbox" name="konsen_vital" id="konsen_vital" value="1" {{ old('konsen_vital', 0) == 1 ? 'checked' : '' }}>
                                <label for="konsen_vital">{{ trans('cruds.ropa.fields.konsen_vital') }}</label>
                            </div>
                            @if($errors->has('konsen_vital'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('konsen_vital') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.konsen_vital_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="konsen_umum" value="0">
                                <input type="checkbox" name="konsen_umum" id="konsen_umum" value="1" {{ old('konsen_umum', 0) == 1 ? 'checked' : '' }}>
                                <label for="konsen_umum">{{ trans('cruds.ropa.fields.konsen_umum') }}</label>
                            </div>
                            @if($errors->has('konsen_umum'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('konsen_umum') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.konsen_umum_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="konsen_lain" value="0">
                                <input type="checkbox" name="konsen_lain" id="konsen_lain" value="1" {{ old('konsen_lain', 0) == 1 ? 'checked' : '' }}>
                                <label for="konsen_lain">{{ trans('cruds.ropa.fields.konsen_lain') }}</label>
                            </div>
                            @if($errors->has('konsen_lain'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('konsen_lain') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.konsen_lain_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.ropa.fields.konsen_simpan') }}</label>
                            <select class="form-control" name="konsen_simpan" id="konsen_simpan" required>
                                <option value disabled {{ old('konsen_simpan', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Ropa::KONSEN_SIMPAN_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('konsen_simpan', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('konsen_simpan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('konsen_simpan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.konsen_simpan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="aplikasi">{{ trans('cruds.ropa.fields.aplikasi') }}</label>
                            <input class="form-control" type="text" name="aplikasi" id="aplikasi" value="{{ old('aplikasi', '') }}">
                            @if($errors->has('aplikasi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('aplikasi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.aplikasi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="implementasi_tujuan" value="0">
                                <input type="checkbox" name="implementasi_tujuan" id="implementasi_tujuan" value="1" {{ old('implementasi_tujuan', 0) == 1 ? 'checked' : '' }}>
                                <label for="implementasi_tujuan">{{ trans('cruds.ropa.fields.implementasi_tujuan') }}</label>
                            </div>
                            @if($errors->has('implementasi_tujuan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('implementasi_tujuan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.implementasi_tujuan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="implementasi_update" value="0">
                                <input type="checkbox" name="implementasi_update" id="implementasi_update" value="1" {{ old('implementasi_update', 0) == 1 ? 'checked' : '' }}>
                                <label for="implementasi_update">{{ trans('cruds.ropa.fields.implementasi_update') }}</label>
                            </div>
                            @if($errors->has('implementasi_update'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('implementasi_update') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.implementasi_update_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="implementasi_akses" value="0">
                                <input type="checkbox" name="implementasi_akses" id="implementasi_akses" value="1" {{ old('implementasi_akses', 0) == 1 ? 'checked' : '' }}>
                                <label for="implementasi_akses">{{ trans('cruds.ropa.fields.implementasi_akses') }}</label>
                            </div>
                            @if($errors->has('implementasi_akses'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('implementasi_akses') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.implementasi_akses_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="implementasi_hapus" value="0">
                                <input type="checkbox" name="implementasi_hapus" id="implementasi_hapus" value="1" {{ old('implementasi_hapus', 0) == 1 ? 'checked' : '' }}>
                                <label for="implementasi_hapus">{{ trans('cruds.ropa.fields.implementasi_hapus') }}</label>
                            </div>
                            @if($errors->has('implementasi_hapus'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('implementasi_hapus') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.implementasi_hapus_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="implementasi_tarik" value="0">
                                <input type="checkbox" name="implementasi_tarik" id="implementasi_tarik" value="1" {{ old('implementasi_tarik', 0) == 1 ? 'checked' : '' }}>
                                <label for="implementasi_tarik">{{ trans('cruds.ropa.fields.implementasi_tarik') }}</label>
                            </div>
                            @if($errors->has('implementasi_tarik'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('implementasi_tarik') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.implementasi_tarik_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="implementasi_berat" value="0">
                                <input type="checkbox" name="implementasi_berat" id="implementasi_berat" value="1" {{ old('implementasi_berat', 0) == 1 ? 'checked' : '' }}>
                                <label for="implementasi_berat">{{ trans('cruds.ropa.fields.implementasi_berat') }}</label>
                            </div>
                            @if($errors->has('implementasi_berat'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('implementasi_berat') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.implementasi_berat_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="implementasi_tunda" value="0">
                                <input type="checkbox" name="implementasi_tunda" id="implementasi_tunda" value="1" {{ old('implementasi_tunda', 0) == 1 ? 'checked' : '' }}>
                                <label for="implementasi_tunda">{{ trans('cruds.ropa.fields.implementasi_tunda') }}</label>
                            </div>
                            @if($errors->has('implementasi_tunda'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('implementasi_tunda') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.implementasi_tunda_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="implementasi_rugi" value="0">
                                <input type="checkbox" name="implementasi_rugi" id="implementasi_rugi" value="1" {{ old('implementasi_rugi', 0) == 1 ? 'checked' : '' }}>
                                <label for="implementasi_rugi">{{ trans('cruds.ropa.fields.implementasi_rugi') }}</label>
                            </div>
                            @if($errors->has('implementasi_rugi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('implementasi_rugi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.implementasi_rugi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="implementasi_pakai" value="0">
                                <input type="checkbox" name="implementasi_pakai" id="implementasi_pakai" value="1" {{ old('implementasi_pakai', 0) == 1 ? 'checked' : '' }}>
                                <label for="implementasi_pakai">{{ trans('cruds.ropa.fields.implementasi_pakai') }}</label>
                            </div>
                            @if($errors->has('implementasi_pakai'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('implementasi_pakai') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.implementasi_pakai_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="implementasi_kirim" value="0">
                                <input type="checkbox" name="implementasi_kirim" id="implementasi_kirim" value="1" {{ old('implementasi_kirim', 0) == 1 ? 'checked' : '' }}>
                                <label for="implementasi_kirim">{{ trans('cruds.ropa.fields.implementasi_kirim') }}</label>
                            </div>
                            @if($errors->has('implementasi_kirim'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('implementasi_kirim') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.implementasi_kirim_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="join_pihak" value="0">
                                <input type="checkbox" name="join_pihak" id="join_pihak" value="1" {{ old('join_pihak', 0) == 1 ? 'checked' : '' }}>
                                <label for="join_pihak">{{ trans('cruds.ropa.fields.join_pihak') }}</label>
                            </div>
                            @if($errors->has('join_pihak'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('join_pihak') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.join_pihak_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="join_janji" value="0">
                                <input type="checkbox" name="join_janji" id="join_janji" value="1" {{ old('join_janji', 0) == 1 ? 'checked' : '' }}>
                                <label for="join_janji">{{ trans('cruds.ropa.fields.join_janji') }}</label>
                            </div>
                            @if($errors->has('join_janji'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('join_janji') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.join_janji_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="join_tujuan" value="0">
                                <input type="checkbox" name="join_tujuan" id="join_tujuan" value="1" {{ old('join_tujuan', 0) == 1 ? 'checked' : '' }}>
                                <label for="join_tujuan">{{ trans('cruds.ropa.fields.join_tujuan') }}</label>
                            </div>
                            @if($errors->has('join_tujuan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('join_tujuan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.join_tujuan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="join_pic" value="0">
                                <input type="checkbox" name="join_pic" id="join_pic" value="1" {{ old('join_pic', 0) == 1 ? 'checked' : '' }}>
                                <label for="join_pic">{{ trans('cruds.ropa.fields.join_pic') }}</label>
                            </div>
                            @if($errors->has('join_pic'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('join_pic') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.join_pic_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.ropa.fields.status') }}</label>
                            <select class="form-control" name="status" id="status" required>
                                <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Ropa::STATUS_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.ropa.fields.status_helper') }}</span>
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