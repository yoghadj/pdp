@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('kategori_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.kategoris.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.kategori.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.kategori.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Kategori">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.kategori.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.kategori.fields.proses') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.kategori.fields.stakeholder') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.kategori.fields.pia') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kategoris as $key => $kategori)
                                    <tr data-entry-id="{{ $kategori->id }}">
                                        <td>
                                            {{ $kategori->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $kategori->proses ?? '' }}
                                        </td>
                                        <td>
                                            {{ $kategori->stakeholder ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $kategori->pia ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $kategori->pia ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            @can('kategori_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.kategoris.show', $kategori->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('kategori_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.kategoris.edit', $kategori->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('kategori_delete')
                                                <form action="{{ route('frontend.kategoris.destroy', $kategori->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('kategori_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.kategoris.massDestroy') }}",
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
  let table = $('.datatable-Kategori:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection