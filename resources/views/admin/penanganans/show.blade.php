@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.penanganan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.penanganans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.penanganan.fields.id') }}
                        </th>
                        <td>
                            {{ $penanganan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.penanganan.fields.min') }}
                        </th>
                        <td>
                            {{ $penanganan->min }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.penanganan.fields.max') }}
                        </th>
                        <td>
                            {{ $penanganan->max }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.penanganan.fields.risiko') }}
                        </th>
                        <td>
                            {{ App\Models\Penanganan::RISIKO_SELECT[$penanganan->risiko] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.penanganan.fields.penanganan') }}
                        </th>
                        <td>
                            {{ $penanganan->penanganan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.penanganan.fields.opsi') }}
                        </th>
                        <td>
                            {{ App\Models\Penanganan::OPSI_SELECT[$penanganan->opsi] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.penanganans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection