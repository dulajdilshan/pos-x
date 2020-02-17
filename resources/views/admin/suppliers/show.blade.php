@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            Supplier Details
{{--            {{ trans('global.show') }} {{ trans('global.product.title') }}--}}
        </div>
{{--                        TODO:Add back button--}}
{{--        TODO: Edit button to redirect to edit page--}}
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <th>
{{--                        {{ trans('global.supplier.fields.name') }}--}}
                        Supplier Name
                    </th>
                    <td>
                        {{ $supplier->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                         Phone number
                    </th>
                    <td>
                        {!! $supplier->phone !!}
                    </td>
                </tr>
                <tr>
                    <th>
                            Address
                    </th>
                    <td>
                        {{ $supplier->address }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Bank Name
                    </th>
                    <td>
                        {{ $supplier->bank_name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Account Number
                    </th>
                    <td>
                        {{ $supplier->bank_acc_no}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Branch
                    </th>
                    <td>
                        {{ $supplier->bank_branch }}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
