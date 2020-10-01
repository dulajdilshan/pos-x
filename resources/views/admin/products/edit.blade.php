@extends('layouts.admin')
@section('content')
    <div>
        <a href="{{route('admin.products.index')}}" type="button" class="btn btn-secondary">
            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back
        </a>
    </div>
    <label for="addItemLbl" style="font-weight:bold; font-size:25px; color:#16A085;"><i class="fas fa-plus-circle"></i>
        Update Product</label>
    &nbsp;&nbsp;<i class="fas fa-tshirt fa-2x" style="color:#AED6F1"></i> &nbsp;<i class="fas fa-tshirt fa-2x"
                                                                                   style="color:#F1948A"></i>
    @if($errors)
        @foreach($errors as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
    @endif
    <div class="card" style="margin-top: 20px;">
        <form class="card-header"
              action="{{ route('admin.products.update', [$product->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <br>
            <section class="inputs">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="item_code"
                                       style="font-weight:bold; font-size:18px; color:#34495E; font-family: Arial, Helvetica, sans-serif;">Item
                                    Code</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="item_code" name="item_code"
                                       value="{{$product->item_code}}"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="name" style="font-weight:bold; font-size:17px; color:#16A085;">Item
                                    Name</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" name="name" required
                                value="{{$product->name}}"/>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="quantity" style="font-weight:bold; font-size:17px; color:#16A085;">Item
                                    Qty</label>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="quantity" name="quantity"
                                value="{{$product->quantity}}"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="unit_price" style="font-weight:bold; font-size:17px; color:#16A085;">Unit
                                    Price</label>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="unit_price" name="unit_price"
                                value="{{$product->unit_price}}"/>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="itemCode"
                                       style="font-weight:bold; font-size:17px; color:#16A085;">Supplier</label>
                            </div>
                            <div class="col-md-6">
                                <select name="supplier" id="supplier"
                                        class="js-example-data-array select2-hidden-accessible"
                                        tabindex="-1" aria-hidden="true" disabled>

                                </select>
                                <span disabled
                                    class="select2 select2-container select2-container--default" dir="ltr"
                                    style="width: auto;">
                                    @foreach($suppliers as $key => $supplier)
                                        <option
                                            value="{{ $key }}" {{$product->supplier()->first()->id == $key ? 'selected' : '' }}>
                                            {{ $supplier->name}}
                                        </option>
                                        @if ($key == old('supplier', $supplier->id))
                                            selected="selected"
                                        @endif
                                    @endforeach

                                </span>

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <label for="supplier_code" style="font-weight:bold; font-size:17px; color:#16A085;">Supplier
                                    Code</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="supplier_code" name="supplier_code"
                                value="{{$product->supplier()->first()->code}}" disabled/>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                {{--                                <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">--}}
                                <div class="form-group">
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
                            <span class="m-l-10" style="font-weight:bold; font-size:25px;"> Update</span>
                        </button>&nbsp;&nbsp;
                        <button id="clearBtn" type="reset" class="btn btn-danger waves-effect waves-light">
                            <i class="fas fa-times-circle fa-2x"></i>
{{--                            TODO: Implement reset functionality--}}
                            <span class="m-l-10" style="font-weight:bold; font-size:25px;"> Reset</span>
                        </button>
                    </div>
                </div>

            </section>
        </form>

    </div>
    </div>

@endsection
