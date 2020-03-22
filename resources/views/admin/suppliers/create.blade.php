@extends('layouts.admin')
@section('content')
    <label for="addsupplierLbl" style="font-weight:bold; font-size:25px; color:#16A085;"><i
            class="fas fa-plus-circle"></i> ADD NEW SUPPLIER
    </label>
    &nbsp;&nbsp;<i class="fas fa-person-carry fa-2x" style="color:#AED6F1"></i> &nbsp;<i
        class="fas fa-person-carry fa-2x" style="color:#F1948A"></i>

    <div class="card" style="margin-top: 20px;">
        <div class="card-header">
            <br>
            <section class="inputs">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="supplierCode"
                                       style="font-weight:bold; font-size:18px; color:#34495E; font-family: Arial, Helvetica, sans-serif;">Supplier
                                    Code</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="supplierCode"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="supplierName" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier/Company
                                    Name</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="supplierName"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="supplierContact" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier/Company
                                    Contact No</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="supplierContact"/>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="companyAdress" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier/Company
                                    Adress</label>
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="companyAdress" rows="1"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="supplierEmail" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier/Company
                                    E-Mail</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="supplierEmail"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="supplierBank" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier
                                    Bank Name</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="supplierBank"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="bankBranch" style="font-weight:bold; font-size:17px; color:#16A085;">Bank
                                    Branch</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="bankBranch"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="supplierBankAccNo" style="font-weight:bold; font-size:17px; color:#16A085;">Bank
                                    Acc.No</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="supplierBankAccNo"/>
                            </div>
                        </div>


                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="row">
                            <div class="col-md-6" style="margin-left: 270px;">
                                <button id="addBtn" type="button" class="btn btn-success waves-effect waves-light">
                                    <i class="fas fa-plus-circle fa-2x"></i>
                                    <span class="m-l-10" style="font-weight:bold; font-size:25px;"> ADD</span>
                                </button>&nbsp;&nbsp;

                                <button id="clearBtn" type="button" class="btn btn-danger waves-effect waves-light">
                                    <i class="fas fa-times-circle fa-2x"></i>
                                    <span class="m-l-10" style="font-weight:bold; font-size:25px;"> Clear</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

@endsection
