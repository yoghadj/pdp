@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.ropa.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.ropas.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $ropa->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.unit_kerja') }}
                                    </th>
                                    <td>
                                        {{ $ropa->unit_kerja }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.sub_unit') }}
                                    </th>
                                    <td>
                                        {{ $ropa->sub_unit }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.fungsi') }}
                                    </th>
                                    <td>
                                        {{ $ropa->fungsi }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.pic') }}
                                    </th>
                                    <td>
                                        {{ $ropa->pic }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.proses_bisnis') }}
                                    </th>
                                    <td>
                                        {{ $ropa->proses_bisnis }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.peran') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Ropa::PERAN_SELECT[$ropa->peran] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.jenis_data') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Ropa::JENIS_DATA_SELECT[$ropa->jenis_data] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.umum_nama_lengkap') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->umum_nama_lengkap ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.umum_jenkel') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->umum_jenkel ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.umum_kewarganegaraan') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->umum_kewarganegaraan ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.umum_agama') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->umum_agama ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.umum_kawin') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->umum_kawin ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.umum_kombinasi') }}
                                    </th>
                                    <td>
                                        {{ $ropa->umum_kombinasi }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.spesifik_sehat') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->spesifik_sehat ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.spesifik_biometrik') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->spesifik_biometrik ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.spesifik_genetik') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->spesifik_genetik ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.spesifik_jahat') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->spesifik_jahat ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.spesifik_anak') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->spesifik_anak ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.spesifik_uang') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->spesifik_uang ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.spesifik_lain') }}
                                    </th>
                                    <td>
                                        {{ $ropa->spesifik_lain }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.format_elektronik') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->format_elektronik ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.format_nonelektronik') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->format_nonelektronik ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.tujuan') }}
                                    </th>
                                    <td>
                                        {{ $ropa->tujuan }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.owner') }}
                                    </th>
                                    <td>
                                        {{ $ropa->owner }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.sumber') }}
                                    </th>
                                    <td>
                                        {{ $ropa->sumber }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.simpan_divsendiri') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->simpan_divsendiri ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.simpan_divlain') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->simpan_divlain ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.simpan_vendor') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->simpan_vendor ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.aman_akses') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->aman_akses ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.aman_enkripsi') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->aman_enkripsi ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.aman_otentikasi') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->aman_otentikasi ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.aman_lainnya') }}
                                    </th>
                                    <td>
                                        {{ $ropa->aman_lainnya }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.proses_olehkumpul') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->proses_olehkumpul ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.proses_olahanalisis') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->proses_olahanalisis ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.proses_simpan') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->proses_simpan ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.proses_baik') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->proses_baik ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.proses_tampil') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->proses_tampil ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.proses_hapus') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->proses_hapus ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.aliran_input') }}
                                    </th>
                                    <td>
                                        {{ $ropa->aliran_input }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.aliran_output') }}
                                    </th>
                                    <td>
                                        {{ $ropa->aliran_output }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.transfer_tujuan') }}
                                    </th>
                                    <td>
                                        {{ $ropa->transfer_tujuan }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.transfer_tipe') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Ropa::TRANSFER_TIPE_SELECT[$ropa->transfer_tipe] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.transfer_metode') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Ropa::TRANSFER_METODE_SELECT[$ropa->transfer_metode] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.retensi_periode') }}
                                    </th>
                                    <td>
                                        {{ $ropa->retensi_periode }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.retensi_metode') }}
                                    </th>
                                    <td>
                                        {{ $ropa->retensi_metode }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.konsen_kumpul') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->konsen_kumpul ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.konsen_mekanisme') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Ropa::KONSEN_MEKANISME_SELECT[$ropa->konsen_mekanisme] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.konsen_wajib') }}
                                    </th>
                                    <td>
                                        {{ $ropa->konsen_wajib }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.konsen_aturan') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->konsen_aturan ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.konsen_vital') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->konsen_vital ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.konsen_umum') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->konsen_umum ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.konsen_lain') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->konsen_lain ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.konsen_simpan') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Ropa::KONSEN_SIMPAN_SELECT[$ropa->konsen_simpan] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.aplikasi') }}
                                    </th>
                                    <td>
                                        {{ $ropa->aplikasi }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.implementasi_tujuan') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->implementasi_tujuan ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.implementasi_update') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->implementasi_update ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.implementasi_akses') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->implementasi_akses ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.implementasi_hapus') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->implementasi_hapus ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.implementasi_tarik') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->implementasi_tarik ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.implementasi_berat') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->implementasi_berat ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.implementasi_tunda') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->implementasi_tunda ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.implementasi_rugi') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->implementasi_rugi ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.implementasi_pakai') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->implementasi_pakai ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.implementasi_kirim') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->implementasi_kirim ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.join_pihak') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->join_pihak ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.join_janji') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->join_janji ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.join_tujuan') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->join_tujuan ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.join_pic') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $ropa->join_pic ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Ropa::STATUS_SELECT[$ropa->status] ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.ropas.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection