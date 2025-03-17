@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('penanganan_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.penanganans.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.penanganan.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.penanganan.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Penanganan">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.penanganan.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.penanganan.fields.min') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.penanganan.fields.max') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.penanganan.fields.risiko') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.penanganan.fields.penanganan') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.penanganan.fields.opsi') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($penanganans as $key => $penanganan)
                                    <tr data-entry-id="{{ $penanganan->id }}">
                                        <td>
                                            {{ $penanganan->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $penanganan->min ?? '' }}
                                        </td>
                                        <td>
                                            {{ $penanganan->max ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Penanganan::RISIKO_SELECT[$penanganan->risiko] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $penanganan->penanganan ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Penanganan::OPSI_SELECT[$penanganan->opsi] ?? '' }}
                                        </td>
                                        <td>
                                            @can('penanganan_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.penanganans.show', $penanganan->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('penanganan_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.penanganans.edit', $penanganan->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('penanganan_delete')
                                                <form action="{{ route('frontend.penanganans.destroy', $penanganan->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('penanganan_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.penanganans.massDestroy') }}",
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
  let table = $('.datatable-Penanganan:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection