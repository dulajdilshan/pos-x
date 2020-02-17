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
@endsection
