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
                    
                    </br>
        
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
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="" style="font-weight:bold; font-size:17; color:#16A085;">Supplier/Company Adress</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text area" class="form-control" id="companyAdress"></input>
                        </div>    
                    </div>

               
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 control-label">
                                <lable for="supplierCode" style="font-weight:bold; font-size:17; color:#16A085;">Suplier Name</lable>
                            </div>
                            <div class="col-md-6">
                                <select id="suplierName"class="js-example-data-array select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sqvn-container"><span class="select2-selection__rendered" ></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>     
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <lable for="supplierCode" style="font-weight:bold; font-size:17; color:#16A085;">Suplier Code</lable>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="suplierCode"></input>
                        </div>  
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>

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