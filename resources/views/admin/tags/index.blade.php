@extends('layouts.admin')
@section('content')
    @can('role_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.tags.create") }}">
                    Add Tag
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            Tag List
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Tag Name
                        </th>
                        <th>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $key => $tag)
                        <tr data-entry-id="{{ $tag->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $tag->name ?? '' }}
                            </td>
                            <td>
{{--                                @can('permission_show')--}}
                                    <a class="btn btn-xs btn-primary"
                                       href="{{ route('admin.tags.show', $tag->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
{{--                                @endcan--}}
{{--                                @can('permission_edit')--}}
                                    <a class="btn btn-xs btn-info"
                                       href="{{ route('admin.tags.edit', $tag->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
{{--                                @endcan--}}
{{--                                @can('permission_delete')--}}
                                    <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST"
                                          onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                          style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger"
                                               value="{{ trans('global.delete') }}">
                                    </form>
{{--                                @endcan--}}
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
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.tags.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({selected: true}).nodes(), function (entry) {
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
                            data: {ids: ids, _method: 'DELETE'}
                        })
                            .done(function () {
                                location.reload()
                            })
                    }
                }
            }
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

            dtButtons.push(deleteButton)


            $('.datatable:not(.ajaxTable)').DataTable({buttons: dtButtons})
        })

    </script>
@endsection
@endsection
