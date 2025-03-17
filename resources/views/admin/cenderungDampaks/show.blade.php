@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.cenderungDampak.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cenderung-dampaks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.cenderungDampak.fields.id') }}
                        </th>
                        <td>
                            {{ $cenderungDampak->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cenderungDampak.fields.cenderung') }}
                        </th>
                        <td>
                            {{ $cenderungDampak->cenderung->nilai ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cenderungDampak.fields.dampak') }}
                        </th>
                        <td>
                            {{ $cenderungDampak->dampak->nilai ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cenderungDampak.fields.nilai') }}
                        </th>
                        <td>
                            {{ $cenderungDampak->nilai }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cenderung-dampaks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection