@extends('layouts.admin')
@section('content')
    <label for="addItemLbl" style="font-weight:bold; font-size:25px; color:#16A085;"><i class="fas fa-plus-circle"></i>
        ADD NEW ITEM</label>
    &nbsp;&nbsp;<i class="fas fa-tshirt fa-2x" style="color:#AED6F1"></i> &nbsp;<i class="fas fa-tshirt fa-2x"
                                                                                   style="color:#F1948A"></i>

    <div class="card" style="margin-top: 20px;">
        <div class="card-header">
            <br>
            <section class="inputs">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemCode"
                                       style="font-weight:bold; font-size:18px; color:#34495E; font-family: Arial, Helvetica, sans-serif;">Item
                                    Code</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="itemCode"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemName" style="font-weight:bold; font-size:17px; color:#16A085;">Item
                                    Name</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="itemName"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemMainCat" style="font-weight:bold; font-size:17px; color:#16A085;">Select a
                                    Main Category</label>
                            </div>
                            <div class="col-md-6">
                                <select id="itemCategory" class="js-example-data-array select2-hidden-accessible"
                                        tabindex="-1" aria-hidden="true"></select><span
                                    class="select2 select2-container select2-container--default" dir="ltr"
                                    style="width: auto;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-sqvn-container"><span
                                                class="select2-selection__rendered"></span></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                <div class="col-md-6 control-label">
                                    <label for="" style="font-weight:bold; font-size:14px; color:#85929E ;">Select a Sub
                                        Category 1</label>
                                </div>
                                <div class="col-md-6">
                                    <select id="itemSubCategory1"
                                            class="js-example-data-array select2-hidden-accessible" tabindex="-1"
                                            aria-hidden="true"></select><span
                                        class="select2 select2-container select2-container--default" dir="ltr"
                                        style="width: auto;"><span class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-sqvn-container"><span
                                                    class="select2-selection__rendered"></span></span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 control-label">
                                    <label for=" " style="font-weight:bold; font-size:14px; color:#85929E ;">Select a
                                        Sub Category 2</label>
                                </div>
                                <div class="col-md-6">
                                    <select id="itemSubCategory2"
                                            class="js-example-data-array select2-hidden-accessible" tabindex="-1"
                                            aria-hidden="true"></select><span
                                        class="select2 select2-container select2-container--default" dir="ltr"
                                        style="width: auto;"><span class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-sqvn-container"><span
                                                    class="select2-selection__rendered"></span></span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 control-label">
                                    <label for="itemCode" style="font-weight:bold; font-size:14px; color:#85929E ;">Select
                                        a Sub Category 3</label>
                                </div>
                                <div class="col-md-6">
                                    <select id="itemSubCategory3"
                                            class="js-example-data-array select2-hidden-accessible" tabindex="-1"
                                            aria-hidden="true"></select><span
                                        class="select2 select2-container select2-container--default" dir="ltr"
                                        style="width: auto;"><span class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-sqvn-container"><span
                                                    class="select2-selection__rendered"></span></span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>


                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemCode" style="font-weight:bold; font-size:17px; color:#16A085;">Item
                                    Qty</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="itemQty"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemCode" style="font-weight:bold; font-size:17px; color:#16A085;">Unit
                                    Price</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="unitPrice"/>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemCode" style="font-weight:bold; font-size:17px; color:#16A085;">Suplier
                                    Name</label>
                            </div>
                            <div class="col-md-6">
                                <select id="suplierName" class="js-example-data-array select2-hidden-accessible"
                                        tabindex="-1" aria-hidden="true"></select><span
                                    class="select2 select2-container select2-container--default" dir="ltr"
                                    style="width: auto;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-sqvn-container"><span
                                                class="select2-selection__rendered"></span></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemCode" style="font-weight:bold; font-size:17px; color:#16A085;">Suplier
                                    Code</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="suplierCode"/>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

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
