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

    .card-inputs {

    background-color: #cadee3;

    }

    .card-table {

    background-color: #e8c3d9;

    }
    .card-billing {

    background-color: #cadee3;

    }
    .my-custom-scrollbar {
        position: relative;
        height: 200px;
        overflow: auto;
    }
    .table-wrapper-scroll-y {
        display: block;
    }
    
</style>



    <div class="card">
        <div class="card-header">
           <section class=inputs>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-inputs" style="margin-top: 20px;">
                            <div  style="margin: 10px 10px 10px 10px;">
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
                                        <lable for="itemName" style="font-weight:bold; font-size:15px; color:#85929E;">Item Name</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="itemName"></input>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemCat" style="font-weight:bold; font-size:15px; color:#85929E;">Item Tags</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="itemCat"></input>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemCode" style="font-weight:bold; font-size:15px; color:#F97985;">Unit Price</lable>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" id="unitPrice"></input>
                                    </div>
                                </div>
                                
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemCode" style="font-weight:bold; font-size:15px; color:#F97985;">Item Qty</lable>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" id="itemQty"></input>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemCode" style="font-weight:bold; font-size:15px; color:#F97985;">Discount</lable>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" id="discount"></input>
                                    </div>
                                </div>

                                </br>
                                </br>
                                <button type="button" id="add-btn" onclick="AddData()" class="btn btn-success waves-effect waves-light">
                                    <i class="fas fa-plus-circle fa-2x" ></i>
                                    <span class="m-l-10" style="font-weight:bold; font-size:25px;"> Add</span>
                                </button>
                                &nbsp; &nbsp; &nbsp;
                                <button type="button" id="refresh-btn" onclick="clearData()" class="btn btn-warning waves-effect waves-light">
                                    <i class="fas fa-redo-alt fa-2x" style="color:white" ></i>
                                    <span class="m-l-10" style="font-weight:bold; color:white; font-size:25px;"> Refresh</span>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-8">
                        <div class="card card-table table-wrapper-scroll-y my-custom-scrollbar" style="margin-top: 20px;">
                            <table class="table table-striped table-hover table-bordered" style=" " id="itemList">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th style="color:#85929E;">Item Code</th>
                                        <th style="color:#85929E;">Item Name</th>
                                        <th style="color:#F97985;">Unit Price</th>
                                        <th style="color:#F97985;">Unit Qty</th>
                                        <th style="color:#F97985;">Discount</th>
                                        <th style="color:#F97985;">Price </th>
                                    </tr>
                                </thead>
                                <tbody style="overflow-y: auto;" >
                                    <tr>
                                        <td>
                                        <a href='javascript:void(0);'  class='delete' title='Delete' data-toggle='tooltip'><i class='fas fa-trash-alt fa-fw' ></i></a>
                                            
                                        </td>
                                        <td>ABC1</td>
                                        <td>Name1</td>
                                        <td>50</td>
                                        <td>10</td>
                                        <td class="countableDis">10</td>
                                        <td class="countablePrice">400</td>
                                    </tr>
                    

                                </tbody>
                            </table>
                        </div>
                        </br>
                        </br>


                        <div class="card card-billing" style="margin-top:-30px; " >
                            <div class="row" style="margin: 10px 10px 10px 10px;">
                                <div class="row col-md-10 offset-md-4" style="">
                                    <div class="col-sm-4 control-label">
                                        <lable for="totalDiscount" style="font-weight:bold; font-size:20px; color:#c2b315;">Total Discount</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control " id="totalDiscount"></input>
                                    </div>
                                </div>
                                <div class="row col-md-10 offset-md-4" style="margin-top:20px;">
                                    <div class="col-sm-4 control-label">
                                        <lable for="totalAmount" style="font-weight:bold; font-size:20px; color:#F97985;">Total Amount</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control " id="totalAmount"></input>
                                    </div>
                                </div>
                                </br>
                                <div class="row col-md-10 offset-md-4" style="">
                                    <div class="col-sm-4 control-label">
                                        <lable for="payAmount" style="font-weight:bold; font-size:20px; color:#85929E;">Pay Amount</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control payment" id="payAmount"></input>
                                    </div>
                                </div>
                                </br>
                                <div class="row col-md-10 offset-md-4" style="">
                                    <div class="col-sm-4 control-label">
                                        <lable for="totalBalance" style="font-weight:bold; font-size:20px; color:#2ECC71;">Balance</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" id="balance"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </br>





                    </div>

                    <div class="row col-sm-12">
                        <div class="col-sm-8">
                        </div>

                        <div class=" row col-sm-4 ">
                            <div class="col-md-6" style="">
                                <button id="printBtn" type="button" class="btn btn-primary waves-effect waves-light" >
                                    <i class="fas fa-print fa-2x" ></i>
                                    <span class="m-l-10" style="font-weight:bold; font-size:25px;"> Print</span>
                                </button>
                            </div>
                            <div class="col-md-6" style="">
                                <button id="clearBtn" type="button" class="btn btn-danger waves-effect waves-light" onclick="clearAlldata()">
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

        document.getElementById("totalDiscount").disabled = true;
        document.getElementById("totalAmount").disabled = true;
        document.getElementById("balance").disabled = true;

         $('#payAmount').on('keyup', function() {
            if($.trim(this.value).length) {
                var balance =parseFloat(this.value).toFixed(2) - parseFloat($('#totalAmount').val()).toFixed(2); 
                            
                $('#balance').val(balance);
            }
        });

        var rows = "";
        // function for adding data to sale table 
        document.getElementById('add-btn').onclick = function AddData() {
            var itemCode = document.getElementById("itemCode").value;
            var itemName = document.getElementById("itemName").value;
            var unitDiscount = document.getElementById("discount").value;
            var unitPrice = document.getElementById("unitPrice").value;
            var itemQty = document.getElementById("itemQty").value;

            var discount=unitDiscount*itemQty;
            var price=itemQty*(unitPrice-unitDiscount);
            
            console.log("discount", discount);
            
            

            row = "<tr><td><a  class='delete' title='Delete' data-toggle='tooltip'><i class='fas fa-trash-alt fa-fw'></i></a></td><td>" + itemCode + "</td><td>" + itemName + "</td><td>"  + unitPrice + "</td><td>" + itemQty + "</td><td class='countableDis'> " + discount + "</td><td class='countablePrice'>"+price+"</td></tr>";
            $(row).appendTo("#itemList tbody");

            //calling Sum of Discounts(total Discount) function
            calSumDis();
            //calling Sum of price(total price) function
            calSumPrice();

            

            document.getElementById('itemCode').value = '';
            document.getElementById('itemName').value = '';
            document.getElementById('itemCat').value = '';
            document.getElementById('discount').value = '';
            document.getElementById('unitPrice').value = '';
            document.getElementById('itemQty').value = '';
   
        }

        

        $(document).on('click','.delete',function(){

            var result = confirm("Do you Want to delete this item?");
            if (result) {
                $(this).parent().parent().remove();

                //calling Sum of Discounts(total Discount) function
                calSumDis();
                //calling Sum of price(total price) function
                calSumPrice();
            }    
            
    
        });

        document.getElementById('refresh-btn').onclick = function clearData() {
            document.getElementById('itemCode').value = '';
            document.getElementById('itemName').value = '';
            document.getElementById('itemCat').value = '';
            document.getElementById('discount').value = '';
            document.getElementById('unitPrice').value = '';
            document.getElementById('itemQty').value = '';
        
        }

        //Sum of Discounts(total Discount) function
        function calSumDis(){
            var cls = document.getElementById("itemList").getElementsByTagName("td");
            var sum1 = 0;
            for (var i = 0; i < cls.length; i++){
                if(cls[i].className == "countableDis"){
                    sum1 += isNaN(cls[i].innerHTML) ? 0 : parseInt(cls[i].innerHTML);
                }
            }
            
        document.getElementById('totalDiscount').value = sum1;
        }

        //Sum of price(total Price) function
        function calSumPrice(){
            var cls = document.getElementById("itemList").getElementsByTagName("td");
            var sum2 = 0;
            for (var i = 0; i < cls.length; i++){
                if(cls[i].className == "countablePrice"){
                    sum2 += isNaN(cls[i].innerHTML) ? 0 : parseInt(cls[i].innerHTML);
                }
            }
            
        document.getElementById('totalAmount').value = sum2;
        }
        
      

});

//clear function for all datas in display(refresh the page)
function clearAlldata(){
    
    location.reload();
}


</script>



@endsection
@endsection
