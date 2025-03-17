@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('ropa_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.ropas.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.ropa.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.ropa.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Ropa">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.ropa.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ropa.fields.unit_kerja') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ropa.fields.sub_unit') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ropa.fields.peran') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ropa.fields.jenis_data') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ropa.fields.status') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ropas as $key => $ropa)
                                    <tr data-entry-id="{{ $ropa->id }}">
                                        <td>
                                            {{ $ropa->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $ropa->unit_kerja ?? '' }}
                                        </td>
                                        <td>
                                            {{ $ropa->sub_unit ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Ropa::PERAN_SELECT[$ropa->peran] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Ropa::JENIS_DATA_SELECT[$ropa->jenis_data] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Ropa::STATUS_SELECT[$ropa->status] ?? '' }}
                                        </td>
                                        <td>
                                            @can('ropa_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.ropas.show', $ropa->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('ropa_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.ropas.edit', $ropa->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('ropa_delete')
                                                <form action="{{ route('frontend.ropas.destroy', $ropa->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('ropa_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.ropas.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 10,
  });
  let table = $('.datatable-Ropa:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection