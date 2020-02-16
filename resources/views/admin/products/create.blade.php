@extends('layouts.admin')
@section('content')
<lable for="addItemLbl" style="font-weight:bold; font-size:25px; color:#16A085;"><i class="fas fa-plus-circle" ></i> ADD NEW ITEM</lable> 
&nbsp;&nbsp;<i class="fas fa-tshirt fa-2x" style="color:#AED6F1"></i> &nbsp;<i class="fas fa-tshirt fa-2x" style="color:#F1948A"></i>

<div class="card" style="margin-top: 20px;">

   <!-- <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.product.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.products.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.product.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($product) ? $product->name : '') }}">
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('global.product.fields.description') }}</label>
                <textarea id="description" name="description" class="form-control ">{{ old('description', isset($product) ? $product->description : '') }}</textarea>
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">{{ trans('global.product.fields.price') }}</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($product) ? $product->price : '') }}" step="0.01">
                @if($errors->has('price'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.price_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>-->
    <div class="card-header">
    </br>
        <section class="inputs">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="itemCode" style="font-weight:bold; font-size:18px; color:#34495E; font-family: Arial, Helvetica, sans-serif;">Item Code</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="itemCode"></input>
                        </div>  
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="itemCode" style="font-weight:bold; font-size:17; color:#16A085;">Item Name</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="itemName"></input>
                        </div>    
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="itemCode" style="font-weight:bold; font-size:17; color:#16A085;">Select a Main Category</lable>
                        </div>
                        <div class="col-md-6">
                            <select id="itemCategory"class="js-example-data-array select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sqvn-container"><span class="select2-selection__rendered" ></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>    
                    </div>
                    </br>
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                <div class="col-md-6 control-label">
                                    <lable for="itemCode" style="font-weight:bold; font-size:14px; color:#85929E ;">Select a Sub Category 1</lable>
                                </div>
                                <div class="col-md-6">
                                    <select id="itemSubCategory1"class="js-example-data-array select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sqvn-container"><span class="select2-selection__rendered" ></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>    
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-md-6 control-label">
                                    <lable for="itemCode" style="font-weight:bold; font-size:14px; color:#85929E ;">Select a Sub Category 2</lable>
                                </div>
                                <div class="col-md-6">
                                    <select id="itemSubCategory2"class="js-example-data-array select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sqvn-container"><span class="select2-selection__rendered" ></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>    
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-md-6 control-label">
                                    <lable for="itemCode" style="font-weight:bold; font-size:14; color:#85929E ;">Select a Sub Category 3</lable>
                                </div>
                                <div class="col-md-6">
                                    <select id="itemSubCategory3"class="js-example-data-array select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sqvn-container"><span class="select2-selection__rendered" ></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>    
                            </div>
                        </div>
                    

                    </br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="itemCode" style="font-weight:bold; font-size:17; color:#16A085;">Item Qty</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="itemQty"></input>
                        </div>    
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-6 control-label">
                            <lable for="itemCode" style="font-weight:bold; font-size:17; color:#16A085;">Unit Price</lable>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="unitPrice"></input>
                        </div>    
                    </div>

               
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 control-label">
                                <lable for="itemCode" style="font-weight:bold; font-size:17; color:#16A085;">Suplier Name</lable>
                            </div>
                            <div class="col-md-6">
                                <select id="suplierName"class="js-example-data-array select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sqvn-container"><span class="select2-selection__rendered" ></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>     
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <lable for="itemCode" style="font-weight:bold; font-size:17; color:#16A085;">Suplier Code</lable>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="suplierCode"></input>
                        </div>    
                    </div>





                
                </div>
            </div>

        </section>

    </div>
</div>

@endsection