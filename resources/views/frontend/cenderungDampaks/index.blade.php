@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('cenderung_dampak_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.cenderung-dampaks.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.cenderungDampak.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.cenderungDampak.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-CenderungDampak">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.cenderungDampak.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.cenderungDampak.fields.cenderung') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.cenderungDampak.fields.dampak') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.cenderungDampak.fields.nilai') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cenderungDampaks as $key => $cenderungDampak)
                                    <tr data-entry-id="{{ $cenderungDampak->id }}">
                                        <td>
                                            {{ $cenderungDampak->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $cenderungDampak->cenderung->nilai ?? '' }}
                                        </td>
                                        <td>
                                            {{ $cenderungDampak->dampak->nilai ?? '' }}
                                        </td>
                                        <td>
                                            {{ $cenderungDampak->nilai ?? '' }}
                                        </td>
                                        <td>
                                            @can('cenderung_dampak_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.cenderung-dampaks.show', $cenderungDampak->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('cenderung_dampak_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.cenderung-dampaks.edit', $cenderungDampak->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('cenderung_dampak_delete')
                                                <form action="{{ route('frontend.cenderung-dampaks.destroy', $cenderungDampak->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('cenderung_dampak_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.cenderung-dampaks.massDestroy') }}",
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
  let table = $('.datatable-CenderungDampak:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection