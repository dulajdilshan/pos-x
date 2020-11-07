@extends('layouts.admin')
@section('content')
    <label for="addItemLbl" style="font-weight:bold; font-size:25px; color:#16A085;"><i class="fas fa-plus-circle"></i>
        ADD NEW ITEM</label>
    &nbsp;&nbsp;<i class="fas fa-tshirt fa-2x" style="color:#AED6F1"></i> &nbsp;<i class="fas fa-tshirt fa-2x"
                                                                                   style="color:#F1948A"></i>

    <div class="card" style="margin-top: 20px;">
        <form class="card-header"
              action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
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
                                <input type="text" class="form-control" id="itemCode" name="itemCode"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemName" style="font-weight:bold; font-size:17px; color:#16A085;">Item
                                    Name</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="itemName" name="itemName"/>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemCode" style="font-weight:bold; font-size:17px; color:#16A085;">Item
                                    Qty</label>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="itemQty"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemCode" style="font-weight:bold; font-size:17px; color:#16A085;">Unit
                                    Price</label>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="unitPrice"/>
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
                                <select name="supplierName" id="supplierName"
                                        class="js-example-data-array select2-hidden-accessible"
                                        tabindex="-1" aria-hidden="true">

                                </select>
                                <span
                                    class="select2 select2-container select2-container--default" dir="ltr"
                                    style="width: auto;">
                                    @foreach($suppliers as $key => $supplier)
                                        <option value="{{ $key }}">{{ $supplier->name}}</option>
                                        @if ($key == old('supplierName', $supplier->id))
                                            selected="selected"
                                        @endif
                                    @endforeach

                                </span>

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemCode" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier
                                    Code</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="supplierCode"/>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
                                    <label for="tags" style="font-weight:bold; font-size:17px; color:#16A085;">
                                        Tags:
                                        <span class="btn btn-info btn-xs deselect-all">Deselect all</span>
                                    </label>
                                    (Max=3)
                                    <select name="tags[]" id="tags" class="form-control select2"
                                            multiple="multiple">
                                        @foreach($tags as $id => $tags)
                                            <option
                                                value="{{ $id }}" {{ (in_array($id, old('tags', [])) ||isset($product) && $product->tags->contains($id)) ? 'selected' : '' }}>
                                                {{ $tags}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('tags'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('tags') }}
                                        </em>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.role.fields.permissions_helper') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <br><br>
                    <div class="col-md-6">
                        <button id="addBtn" type="submit" class="btn btn-success waves-effect waves-light">
                            <i class="fas fa-plus-circle fa-2x"></i>
                            <span class="m-l-10" style="font-weight:bold; font-size:25px;"> ADD</span>
                        </button>&nbsp;&nbsp;
                        <button id="clearBtn" type="reset" class="btn btn-danger waves-effect waves-light">
                            <i class="fas fa-times-circle fa-2x"></i>
                            <span class="m-l-10" style="font-weight:bold; font-size:25px;"> Clear</span>
                        </button>
                    </div>
                </div>

            </section>
        </form>

    </div>
    </div>

@endsection
