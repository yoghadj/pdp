@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('dampak_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.dampaks.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.dampak.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.dampak.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Dampak">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.dampak.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.dampak.fields.nilai') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.dampak.fields.finansial') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.dampak.fields.compliance') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.dampak.fields.reputasi') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.dampak.fields.dampak') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dampaks as $key => $dampak)
                                    <tr data-entry-id="{{ $dampak->id }}">
                                        <td>
                                            {{ $dampak->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $dampak->nilai ?? '' }}
                                        </td>
                                        <td>
                                            {{ $dampak->finansial ?? '' }}
                                        </td>
                                        <td>
                                            {{ $dampak->compliance ?? '' }}
                                        </td>
                                        <td>
                                            {{ $dampak->reputasi ?? '' }}
                                        </td>
                                        <td>
                                            {{ $dampak->dampak ?? '' }}
                                        </td>
                                        <td>
                                            @can('dampak_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.dampaks.show', $dampak->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('dampak_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.dampaks.edit', $dampak->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('dampak_delete')
                                                <form action="{{ route('frontend.dampaks.destroy', $dampak->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('dampak_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.dampaks.massDestroy') }}",
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
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  let table = $('.datatable-Dampak:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection