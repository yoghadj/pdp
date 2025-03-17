@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('assess_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.assesses.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.assess.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.assess.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Assess">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.assess.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.proses') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.isu') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.risiko') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.nilai_kemungkinan') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.nilai_dampak') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.total') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.tindakan_pengendalian') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.nilai_kontrol_kemungkinan') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.nilai_kontrol_dampak') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.nilai_kontrol_total') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.tindakan') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.tinjut_penanganan') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.persetujuan_tindakan') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.target_penyelesaian') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.status') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.penanggung_jawab') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.nilai_residu_kemungkinan') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.nilai_residu_dampak') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.nilai_residu_total') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.tindakan_residu') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.assess.fields.tinjut_residual') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($assesses as $key => $assess)
                                    <tr data-entry-id="{{ $assess->id }}">
                                        <td>
                                            {{ $assess->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->proses->proses ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->isu ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->risiko ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->nilai_kemungkinan->nilai ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->nilai_dampak->nilai ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->total ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->tindakan_pengendalian ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->nilai_kontrol_kemungkinan->nilai ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->nilai_kontrol_dampak->nilai ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->nilai_kontrol_total ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Assess::TINDAKAN_SELECT[$assess->tindakan] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->tinjut_penanganan ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->persetujuan_tindakan ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->target_penyelesaian ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Assess::STATUS_SELECT[$assess->status] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->penanggung_jawab ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->nilai_residu_kemungkinan->nilai ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->nilai_residu_dampak->nilai ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->nilai_residu_total ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Assess::TINDAKAN_RESIDU_SELECT[$assess->tindakan_residu] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $assess->tinjut_residual ?? '' }}
                                        </td>
                                        <td>
                                            @can('assess_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.assesses.show', $assess->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('assess_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.assesses.edit', $assess->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('assess_delete')
                                                <form action="{{ route('frontend.assesses.destroy', $assess->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('assess_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.assesses.massDestroy') }}",
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
  let table = $('.datatable-Assess:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection