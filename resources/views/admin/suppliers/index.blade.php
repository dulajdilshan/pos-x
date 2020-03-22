@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.suppliers.create") }}">
                Add Supplier
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Supplier List
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable">
                    <thead>
                    <tr>
                        <th></th>
                        <th width="10">Id</th>
                        <th>Supplier Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($suppliers as $key => $supplier)
                        <tr data-entry-id="{{ $supplier->id }}">
                            <td></td>
                            <td>{{$supplier->id}}</td>
                            <td>{{ $supplier->name ?? '' }}</td>
                            <td>{{ $supplier->address ?? '' }}</td>
                            <td>{{ $supplier->phone ?? '' }}</td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.suppliers.show', $supplier->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                <a class="btn btn-xs btn-info" href="{{ route('admin.suppliers.edit', $supplier->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                <form action="{{ route('admin.suppliers.destroy', $supplier->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@section('scripts')
    @parent
    <script>
        $(function () {
            let deleteButtonTrans = 'Delete Selected';
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.suppliers.massDestroy') }}",
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
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            dtButtons.push(deleteButton)

            $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        })

    </script>
@endsection
@endsection
