@extends('layouts.admin')
@section('content')


<style type="text/css">
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

    .card-table {

    background-color: #F8FBFB;

    }
    .card-billing {

    background-color: #338495;

    }
    .my-custom-scrollbar {
        position: relative;
        height: 500px;
        overflow: auto;
    }
    .table-wrapper-scroll-y {
        display: block;
    }

    
    <link rel="stylesheet" type="text/css" href="{{ url('/css/custom.css') }}" />
    
    
</style>



    <div class="">
        <div class="col-md-12">
            <div class="row ">
                <div class="col-1 text-sale">
                    <label id="lblSale" class="hightlight">Sale</label>
                </div>
                <div class="col-1 text-exchange">
                    <div class="custom-control custom-switch switch-secondary">
                        <input type="checkbox" class="custom-control-input" id="saleSwitcher" unchecked> 
                        <label id="lblExchange" class="custom-control-label" for="saleSwitcher">&nbsp;&nbsp;&nbsp;&nbsp;Exchange</label>
                    </div>
                </div>
            </div>
        </diV>
        <div class="col-md-12">
           <section class="inputs">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-inputs">
                            <div  class="card-inputs-content">
                                <div class="row">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemCode" class="billNo">Bill No </lable>
                                    </div>
                                    <div class="col-md-6">
                                        <lable type="" class="billNo-value" id="billNo">00000</lable>
                                    </div>
                                </div>
                                </br>
                                <hr color="#FBF8F8" class="hr-return"> 
                                </br>
                                <div class="row">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemcode" class="item-code">Item Code</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="itemCode"></input>
                                    </div>

                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemName" class="item-code">Item Name</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="itemName"></input>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemCat" class="item-code">Item Tags </lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="itemCat"></input>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemCode" class="sale-details">Unit Price</lable>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" id="unitPrice"></input>
                                    </div>
                                </div>
                                
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemCode" class="sale-details">Item Qty</lable>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" id="itemQty"></input>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemCode" class="sale-details">Discount</lable>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" id="discount"></input>
                                    </div>
                                </div>

                                </br>
                                </br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" id="add-btn" onclick="AddData()" class="btn btn-success btn-lg btn-block btn-style">
                                            <i class="fas fa-plus-circle fa-sm" ></i>&nbsp;&nbsp;
                                            <span> Add</span>
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" id="refresh-btn" onclick="clearData()" class="btn btn-danger btn-lg btn-block btn-style">
                                            <i class="fas fa-redo-alt fa-sm" style="color:white" ></i>&nbsp;&nbsp;
                                            <span> Refresh</span>
                                        </button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>

                    </div>

                    <div class="col-md-8">
                        <div class="card card-table table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table" id="itemList">
                                <thead>
                                    <tr>
                                    <th scope="col">Action</th>
                                    <th scope="col">Item Code</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col" style="color:#F97985;">Unit Price</th>
                                    <th scope="col" style="color:#F97985;">Unit QTY</th>
                                    <th scope="col" style="color:#F97985;">Disscount</th>
                                    <th scope="col" style="color:#F97985;">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href='javascript:void(0);'  class='delete' title='Delete' data-toggle='tooltip'><i class='fas fa-trash-alt fa-fw' ></i></a>
                                        </td>
                                        <td>ABC1</td>
                                        <td>T-Shirt</td>
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
                        <!-- <div class="card card-table table-wrapper-scroll-y my-custom-scrollbar" style="margin-top: 20px;">
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
                        </div> -->


                        <div class="card card-billing" style="margin-top:-30px; " >
                            <div class="row" style="margin: 10px 10px 10px 10px;">
                                <div class="row col-md-10 offset-md-4" style="">
                                    <div class="col-sm-4 control-label">
                                        <lable for="totalDiscount" class="sale-total-details ">Total Discount</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control input-text-style1 " id="totalDiscount"></input>
                                    </div>
                                </div>
                                <div class="row col-md-10 offset-md-4" style="margin-top:20px;">
                                    <div class="col-sm-4 control-label">
                                        <lable for="totalAmount" class="sale-total-details">Total Amount</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control input-text-style2 " id="totalAmount"></input>
                                    </div>
                                </div>
                                </br>
                                <div class="row col-md-10 offset-md-4" style="">
                                    <div class="col-sm-4 control-label">
                                        <lable for="payAmount" class="sale-total-details">Pay Amount</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control payment input-text-style3" id="payAmount"></input>
                                    </div>
                                </div>
                                </br>
                                <div class="row col-md-10 offset-md-4" style="">
                                    <div class="col-sm-4 control-label">
                                        <lable for="totalBalance" class="sale-total-details">Balance</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control input-text-style4" id="balance"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </br>
                    </div>
                </div>
                <div class="">
                    <div class="row justify-content-end">
                        <div class="col-md-1" style="">
                            <button id="printBtn" type="button" class="btn btn-primary waves-effect waves-light btn-style-sale" >
                                <i class="fas fa-print fa-sm" ></i>&nbsp;&nbsp;Print
                            </button>
                        </div>
                        <div class="col-md-1" style="">
                            <button id="clearBtn" type="button" class="btn btn-danger waves-effect waves-light btn-style-sale" onclick="clearAlldata()">
                                <i class="fas fa-times-circle fa-sm" ></i>&nbsp;&nbsp;Clear
                            </button>
                        </div>
                    </div>
                </div></br></br>

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
        
    $('#saleSwitcher').click(function()  {

        
        if(this.checked)    {
            $('#lblExchange').addClass('hightlight'); 
            $('#lblSale').removeClass('hightlight');
        }
        else    {
            
            $('#lblSale').addClass('hightlight'); 
            $('#lblExchange').removeClass('hightlight');
        }

    });
        

});

//clear function for all datas in display(refresh the page)
function clearAlldata(){
    
    location.reload();
}



</script>





@endsection
@endsection
