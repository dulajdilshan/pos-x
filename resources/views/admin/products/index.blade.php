@extends('layouts.admin')
@section('content')
    @can('product_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.products.create") }}">
                    {{ trans('global.add') }} {{ trans('global.product.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header" style="font-weight:bold; font-size:17px; color:#7f95ba;">
            {{ trans('global.product.title_singular') }} {{ trans('global.list') }}
        </div>

        <br/>
        <br/>

        <div class="row">
            <div class="col-md-8 offset-sm-1">
                <div class="row">
                    <div class="col-md-2 control-label">
                        <label for="itemCode" style="font-weight:bold; font-size:17px; color:#16A085;">Select
                            Tags</label>
                    </div>
                    <div class="col-md-8">
                        <select id="itemTag" name="itemTag" class="js-example-data-array select2-hidden-accessible"
                                tabindex="-1" aria-hidden="true"></select><span
                            class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span
                                class="selection"><span class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-labelledby="select2-sqvn-container"><span
                                        class="select2-selection__rendered"></span></span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                                                                           aria-hidden="true"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="margin-left:-100px">
                <button id="btnSearch" type="button" class="btn btn-primary waves-effect waves-light">
                    <i class="fas fa-search fa-2x"></i>
                    <span class="m-l-10" style="font-weight:bold; font-size:25px;"> Search</span>
                </button>


            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>


        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable">
                    <thead>
                    <tr>
                        <th width="15">
                            Action
                        </th>
                        <th width="08">
                            No
                        </th>
                        <th>
                            {{ trans('global.product.fields.name') }}
                        </th>
                        <th>
                            {{ trans('global.product.fields.description') }}
                        </th>
                        <th>
                            {{ trans('global.product.fields.price') }}
                        </th>
                        <th>
                            Price
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key => $product)
                        <tr data-entry-id="{{ $product->id }}">
                            <td>
                                <a href="#" class="view" title="View" data-toggle="tooltip"><i class="fas fa-eye-alt fa-fw"></i></a>
                            </td>
                            <td>

                            </td>
                            <td>
                                {{ $product->name ?? '' }}
                            </td>
                            <td>
                                {{ $product->description ?? '' }}
                            </td>
                            <td>
                                {{ $product->price ?? '' }}
                            </td>
                            <td>
                                @can('product_show')
                                    <a class="btn btn-xs btn-primary"
                                       href="{{ route('admin.products.show', $product->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('product_edit')
                                    <a class="btn btn-xs btn-info"
                                       href="{{ route('admin.products.edit', $product->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('product_delete')
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                          onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                          style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger"
                                               value="{{ trans('global.delete') }}">
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
@section('scripts')
    @parent
    <script>
        $(function () {
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.products.massDestroy') }}",
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
            @can('product_delete')
            dtButtons.push(deleteButton)
            @endcan

            $('.datatable:not(.ajaxTable)').DataTable({buttons: dtButtons})
        })

    </script>
@endsection
@endsection
