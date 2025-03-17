@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.assess.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.assesses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.id') }}
                        </th>
                        <td>
                            {{ $assess->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.proses') }}
                        </th>
                        <td>
                            {{ $assess->proses->proses ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.isu') }}
                        </th>
                        <td>
                            {{ $assess->isu }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.risiko') }}
                        </th>
                        <td>
                            {{ $assess->risiko }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.nilai_kemungkinan') }}
                        </th>
                        <td>
                            {{ $assess->nilai_kemungkinan->nilai ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.nilai_dampak') }}
                        </th>
                        <td>
                            {{ $assess->nilai_dampak->nilai ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.total') }}
                        </th>
                        <td>
                            {{ $assess->total }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.tindakan_pengendalian') }}
                        </th>
                        <td>
                            {{ $assess->tindakan_pengendalian }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.nilai_kontrol_kemungkinan') }}
                        </th>
                        <td>
                            {{ $assess->nilai_kontrol_kemungkinan->nilai ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.nilai_kontrol_dampak') }}
                        </th>
                        <td>
                            {{ $assess->nilai_kontrol_dampak->nilai ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.nilai_kontrol_total') }}
                        </th>
                        <td>
                            {{ $assess->nilai_kontrol_total }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.tindakan') }}
                        </th>
                        <td>
                            {{ App\Models\Assess::TINDAKAN_SELECT[$assess->tindakan] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.tinjut_penanganan') }}
                        </th>
                        <td>
                            {{ $assess->tinjut_penanganan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.persetujuan_tindakan') }}
                        </th>
                        <td>
                            {{ $assess->persetujuan_tindakan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.target_penyelesaian') }}
                        </th>
                        <td>
                            {{ $assess->target_penyelesaian }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Assess::STATUS_SELECT[$assess->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.penanggung_jawab') }}
                        </th>
                        <td>
                            {{ $assess->penanggung_jawab }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.nilai_residu_kemungkinan') }}
                        </th>
                        <td>
                            {{ $assess->nilai_residu_kemungkinan->nilai ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.nilai_residu_dampak') }}
                        </th>
                        <td>
                            {{ $assess->nilai_residu_dampak->nilai ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.nilai_residu_total') }}
                        </th>
                        <td>
                            {{ $assess->nilai_residu_total }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.tindakan_residu') }}
                        </th>
                        <td>
                            {{ App\Models\Assess::TINDAKAN_RESIDU_SELECT[$assess->tindakan_residu] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.assess.fields.tinjut_residual') }}
                        </th>
                        <td>
                            {{ $assess->tinjut_residual }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.assesses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection