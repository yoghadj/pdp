@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.kategori.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.kategoris.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $kategori->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.proses') }}
                                    </th>
                                    <td>
                                        {{ $kategori->proses }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.stakeholder') }}
                                    </th>
                                    <td>
                                        {{ $kategori->stakeholder }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.kriteria_hukum') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $kategori->kriteria_hukum ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.kriteria_spesifik') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $kategori->kriteria_spesifik ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.kriteria_besar') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $kategori->kriteria_besar ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.kriteria_evaluasi') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $kategori->kriteria_evaluasi ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.kriteria_cocok') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $kategori->kriteria_cocok ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.kriteria_teknologi') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $kategori->kriteria_teknologi ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.kriteria_batas') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $kategori->kriteria_batas ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.pia') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $kategori->pia ? 'checked' : '' }}>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.kategoris.index') }}">
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