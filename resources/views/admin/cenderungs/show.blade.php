@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.cenderung.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cenderungs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.cenderung.fields.id') }}
                        </th>
                        <td>
                            {{ $cenderung->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cenderung.fields.nilai') }}
                        </th>
                        <td>
                            {{ $cenderung->nilai }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cenderung.fields.pola') }}
                        </th>
                        <td>
                            {{ $cenderung->pola }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cenderung.fields.kemungkinan') }}
                        </th>
                        <td>
                            {{ $cenderung->kemungkinan }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cenderungs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection