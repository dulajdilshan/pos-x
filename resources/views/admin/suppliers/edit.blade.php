@extends('layouts.admin')
@section('content')
<lable for="addsupplierLbl" style="font-weight:bold; font-size:25px; color:#16A085;"><i class="fas fa-plus-circle" ></i> ADD NEW supplier</lable> 
&nbsp;&nbsp;<i class="fas fa-person-carry fa-2x" style="color:#AED6F1"></i> &nbsp;<i class="fas fa-person-carry fa-2x" style="color:#F1948A"></i>

<div class="card" style="margin-top: 20px;">
    <div class="card-header">
    </br>
        <section class="inputs">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="supplierCode" style="font-weight:bold; font-size:18px; color:#34495E; font-family: Arial, Helvetica, sans-serif;">Supplier Code</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="supplierCode"></input>
                        </div>  
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="" style="font-weight:bold; font-size:17; color:#16A085;">Supplier/Company Name</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="supplierName"></input>
                        </div>    
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for=" " style="font-weight:bold; font-size:17; color:#16A085;">Supplier Contact No</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="supplierContact"></input>
                        </div>    
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="" style="font-weight:bold; font-size:17; color:#16A085;">Company Contact No</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="companyContact"></input>
                        </div>    
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="" style="font-weight:bold; font-size:17; color:#16A085;">Supplier/Company Adress</lable>
                        </div>
                        <div class="col-md-6">
                            <textarea class="form-control" id="companyAdress" rows="1" ></textarea>
                        </div>    
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="" style="font-weight:bold; font-size:17; color:#16A085;">Supplier/Company E-Mail</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="supplierEmail"></input>
                        </div>    
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="supplierCode" style="font-weight:bold; font-size:17; color:#16A085;">Supplier Bank Name</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="supplierBank"></input>
                        </div>     
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="supplierCode" style="font-weight:bold; font-size:17; color:#16A085;">Bank  Branch</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="bankBranch"></input>
                        </div>     
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="supplierCode" style="font-weight:bold; font-size:17; color:#16A085;">Bank Acc.No</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="supplierBankAccNo"></input>
                        </div>    
                    </div>  
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>

                    <div class="row">
                        <div class="col-md-6" style="margin-left: 270px;">
                            <button id="addBtn" type="button" class="btn btn-success waves-effect waves-light">
                                <i class="fas fa-plus-circle fa-2x" ></i>
                                <span class="m-l-10" style="font-weight:bold; font-size:25px;"> ADD</span>
                            </button>&nbsp;&nbsp;

                            <button id="clearBtn" type="button" class="btn btn-danger waves-effect waves-light">
                                <i class="fas fa-times-circle fa-2x" ></i>
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