@extends('layouts.admin')
@section('content')
    @isset($error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> Not Saved. There is an Error in the Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endisset
<label for="addsupplierLbl" style="font-weight:bold; font-size:25px; color:#16A085;"><i class="fas fa-edit" ></i> EDIT SUPPLIER</label>
&nbsp;&nbsp;<i class="fas fa-person-carry fa-2x" style="color:#AED6F1"></i> &nbsp;<i class="fas fa-person-carry fa-2x" style="color:#F1948A"></i>

<div class="card" style="margin-top: 20px;">
    <form action="{{route('admin.suppliers.update', [$supplier->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
    <div class="card-header">
    <br>
{{--        <section class="inputs">--}}
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <label for="code" style="font-weight:bold; font-size:18px; color:#34495E; font-family: Arial, Helvetica, sans-serif;">Supplier Code</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="code" name="code" value="{{ $supplier->code }}"/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <label for="name" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier/Company Name</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $supplier->name }}"/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <label for="phone" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier/Company Contact No</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $supplier->phone }}"/>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <label for="address" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier/Company Address</label>
                        </div>
                        <div class="col-md-6">
                            <textarea class="form-control" id="address" name="address" rows="1" >{{ $supplier->address }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <label for="email" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier/Company E-Mail</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="email" name="email" value="{{ $supplier->email }}"/>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <label for="bank_name" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier Bank Name</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="bank_name" name="bank_name" value="{{ $supplier->bank_name }}"/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <label for="bank_branch" style="font-weight:bold; font-size:17px; color:#16A085;">Bank  Branch</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="bank_branch" name="bank_branch" value="{{ $supplier->bank_branch }}"/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <label for="bank_acc_no" style="font-weight:bold; font-size:17px; color:#16A085;">Bank Acc. No</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="bank_acc_no" name="bank_acc_no" value="{{ $supplier->bank_acc_no }}"/>
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                        <div class="row " style="margin-left: 270px;">
                            <button id="saveBtn" type="submit" class="btn btn-success waves-effect waves-light">
                                <i class="fas fa-plus-circle fa-2x" ></i>
                                <span class="m-l-10" style="font-weight:bold; font-size:25px;"> SAVE</span>
                            </button>&nbsp;&nbsp;

                            <button id="closeBtn" type="button"  class="btn btn-danger waves-effect waves-light"
                                    onclick="location.href='{{route('admin.suppliers.index')}}'">
                                <i class="fas fa-times-circle fa-2x" ></i>
                                <span class="m-l-10" style="font-weight:bold; font-size:25px;"> ClOSE</span>
                            </button>
                        </div>

                </div>
            </div>
{{--        </section>--}}

    </div>
        </div>
    </form>
</div>

@endsection
