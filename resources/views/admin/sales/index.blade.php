@extends('layouts.admin')
@section('content')

<style type="text/css">
    body {
        color: #566787;
        background: #f5f5f5;
		font-family: 'Roboto', sans-serif;
	}

    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 100px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }

    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }
</style>



    <div class="card">
        <div class="card-header">
           <section class=inputs>
                <div class="row">
                    <div class="col-md-4">

                        <div class="row">
                            <div class="col-md-6 control-label">
                                <lable for="itemCode" style="font-weight:bold; font-size:28px; color:#2ECC71; font-family: Arial, Helvetica, sans-serif;">Bill No</lable>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="billNo"></input>
                            </div>

                        </div>
                        </br>
                            </br>
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
                                <lable for="itemCode" style="font-weight:bold; font-size:15px; color:#85929E;">Item Name</lable>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="itemName"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <lable for="itemCode" style="font-weight:bold; font-size:15px; color:#85929E;">Item Tags</lable>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="itemCat"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <lable for="itemCode" style="font-weight:bold; font-size:15px; color:#F97985;">Discount</lable>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="discount"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <lable for="itemCode" style="font-weight:bold; font-size:15px; color:#F97985;">Unit Price</lable>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="unitPrice"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 control-label">
                                <lable for="itemCode" style="font-weight:bold; font-size:15px; color:#F97985;">Item Qty</lable>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="itemQty"></input>
                            </div>
                        </div>

                        </br>
                        </br>
                        <button type="button" class="btn btn-success waves-effect waves-light">
                            <i class="fas fa-plus-circle fa-2x" ></i>
                            <span class="m-l-10" style="font-weight:bold; font-size:25px;"> Add</span>
                        </button>
                        &nbsp; &nbsp; &nbsp;
                        <button type="button" class="btn btn-primary waves-effect waves-light">
                            <i class="fas fa-redo-alt fa-2x" ></i>
                            <span class="m-l-10" style="font-weight:bold; font-size:25px;"> Refresh</span>
                        </button>


                    </div>

                    <div class="col-md-8">

                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>#</th>
                                    <th style="color:#85929E;">Item Code</th>
                                    <th style="color:#85929E;">Item Name</th>
                                    <th style="color:#F97985;">Unit Price</th>
                                    <th style="color:#F97985;">Discount</th>
                                    <th style="color:#F97985;">Price </th>

                                </tr>
                            </thead>
                            <tbody style="overflow-y: auto;">
                                <tr>
                                    <td>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt fa-fw"></i></a>
                                    </td>
                                    <td>1</td>
                                    <td>ABC1</td>
                                    <td>Name1</td>
                                    <td>500</td>
                                    <td>50</td>
                                    <td>450</td>

                                </tr>
                                <tr>
                                    <td>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt fa-fw"></i></a>
                                    </td>
                                    <td>2</td>
                                    <td>ABC2</td>
                                    <td>Name2</td>
                                    <td>400</td>
                                    <td>50</td>
                                    <td>350</td>

                                </tr>
                                <tr>
                                    <td>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt fa-fw"></i></a>
                                    </td>
                                    <td>3</td>
                                    <td>ABC3</td>
                                    <td>Name3</td>
                                    <td>300</td>
                                    <td>50</td>
                                    <td>250</td>

                                </tr>

                            </tbody>
                        </table>

                        </br>
                        </br>


                        <div class="row col-md-10 offset-md-4" style="">
                            <div class="col-sm-4 control-label">
                                <lable for="itemCode" style="font-weight:bold; font-size:20px; color:#F97985;">Total Amount</lable>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="totalAmount"></input>
                            </div>
                        </div>
                        </br>
                        <div class="row col-md-10 offset-md-4" style="">
                            <div class="col-sm-4 control-label">
                                <lable for="itemCode" style="font-weight:bold; font-size:20px; color:#85929E;">Pay Amount</lable>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="payAmount"></input>
                            </div>
                        </div>
                        </br>
                        <div class="row col-md-10 offset-md-4" style="">
                            <div class="col-sm-4 control-label">
                                <lable for="itemCode" style="font-weight:bold; font-size:20px; color:#2ECC71;">Balance</lable>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="balance"></input>
                            </div>
                        </div>
                        </br>
                        </br>
                        </br>




                    </div>

                    <div class="row col-sm-12">
                        <div class="col-sm-8">
                        </div>

                        <div class=" row col-sm-4 ">
                            <div class="col-md-6" style="">
                                <button id="printBtn" type="button" class="btn btn-success waves-effect waves-light">
                                    <i class="fas fa-print fa-2x" ></i>
                                    <span class="m-l-10" style="font-weight:bold; font-size:25px;"> Print</span>
                                </button>
                            </div>
                            <div class="col-md-6" style="">
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

@section('scripts')
@parent
<!-- jQuery import library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

$(document).ready(function(){


        $("payAmount").keyup(function(){

            var num1=$("totalAmount").val();
            alert(num1);
            var num2=$("payAmount").val();
            var num3=parseInt(num2) - parseInt(num1);

            $("balance").val(num3);

        });
});


</script>



@endsection
@endsection
