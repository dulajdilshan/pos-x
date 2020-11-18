@extends('layouts.admin')
@section('content')

<style type="text/css">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/custom.css') }}" />

    
    
</style>



    <div class="">
        <div class="col-md-12">
           <section class=inputs>
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
                                <div class="">
                                    <lable for="" class="topic-for-return">Return Details</lable>
                                    <hr color="#FBF8F8" class="hr-return">  
                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-md-6 control-label">
                                        <lable for="returnBillNo" class="return-bill-no">Return Bill No</lable>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="itemCode"></input>
                                    </div>
                                </div>
                                </br>
                                <div class="col">
                                    <div class="">
                                        <button id="searchReturnBill" type="button" class="btn btn-danger btn-lg btn-block">Search Bill</button>
                                    </div>
                                </div>
                                </br>
                                </br>
                                <div class="">
                                    <lable for="" class="topic-for-purchased">Purchased Details</lable>
                                    <hr color="#FBF8F8" class="hr-return">  
                                </div>
                                <div class="row ">
                                    <div class="col-md-6 control-label">
                                        <lable for="date&time" class="purchased-details">Date & Time<span>  :</span> </lable>
                                    </div>
                                    <div class="col-md-6 control-label">
                                        <lable for="date&time" class="purchased-details">01-Nov-20  10.10AM</lable>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-6 control-label">
                                        <lable for="itemQty" class="purchased-details">Items Qty </lable>
                                    </div>
                                    <div class="col-md-6 control-label">
                                        <lable for="itemQty" class="purchased-details">03</lable>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 control-label">
                                        <lable for="totDiscount" class="purchased-details">Total Discount</lable>
                                    </div>
                                    <div class="col-md-6 control-label">
                                        <lable for="totDiscount" class="purchased-details">250.00</lable>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 control-label">
                                        <lable for="totAmount" class="purchased-details">Total Amount </lable>
                                    </div>
                                    <div class="col-md-6 control-label">
                                        <lable for="totAmount" class="purchased-details">1500.00</lable>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 control-label">
                                        <lable for="paidAmount" class="purchased-details">Paid Amount </lable>
                                    </div>
                                    <div class="col-md-6 control-label">
                                        <lable for="paidAmount" class="purchased-details">2000.00</lable>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 control-label">
                                        <lable for="balance" class="purchased-details">Balance </lable>
                                    </div>
                                    <div class="col-md-6 control-label">
                                        <lable for="balance" class="purchased-details">500.00</lable>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>

                    <div class="col-md-8 ">
                        <div class="card card-table table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table" id="purchasedItemList">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Item Code</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">QTY</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Ret.QTY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input return-checkbox" id="customCheck1" value="1">
                                                <label class="custom-control-label" for="customCheck1">1</label>
                                            </div>
                                        </th>
                                        <td>ABC1</td>
                                        <td>T-Shirt</td>
                                        <td>1000.00</td>
                                        <td>5</td>
                                        <td>5000.00</td>
                                        <td>
                                            <div class="custom-control ">
                                                <input type="number" class="form-control custom-height return-qty" disabled>
                                               
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input return-checkbox" id="customCheck2" value="1">
                                                <label class="custom-control-label" for="customCheck2">2</label>
                                            </div>
                                        </th>
                                        <td>ABC2</td>
                                        <td>Pant</td>
                                        <td>2000.00</td>
                                        <td>5</td>
                                        <td>9500.00</td>
                                        <td>
                                            <div class="custom-control ">
                                                <input type="number" class="form-control custom-height return-qty" disabled >
                                               
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input return-checkbox" id="customCheck3" value="1">
                                                <label class="custom-control-label" for="customCheck3">3</label>
                                            </div>
                                        </th>
                                        <td>ABC3</td>
                                        <td>Short</td>
                                        <td>800.00</td>
                                        <td>5</td>
                                        <td>4000.00</td>
                                        <td>
                                            <div class="custom-control ">
                                                <input type="number" class="form-control custom-height return-qty" disabled>
                                            </div> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="">
                            <button id="btn-addTo-returnList" type="button" class="btn btn-primary btn-lg btn-block tbl-btn-color"><i class="fa fa-angle-double-down" aria-hidden="true"></i> Add To Return Items</button>
                        </div>
                        <div class="card card-table table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table" id="returnItemList">
                                <thead>
                                    <tr>
                                    <th scope="col">Action</th>
                                    <th scope="col">Item Code</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Sold Price</th>
                                    <th scope="col">QTY</th>
                                    <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href='javascript:void(0);'  class='delete' title='Delete' data-toggle='tooltip'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>
                                        <td>ABC1</td>
                                        <td>T-Shirt</td>
                                        <td>1000.00</td>
                                        <td>1000.00</td>
                                        <td class="countableQty">5</td>
                                        <td class="countablePrice">5000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href='javascript:void(0);'  class='delete' title='Delete' data-toggle='tooltip'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>
                                        <td>ABC2</td>
                                        <td>Pant</td>
                                        <td>2000.00</td>
                                        <td>1900.00</td>
                                        <td class="countableQty">2</td>
                                        <td class="countablePrice">3800</div> 
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-6">
                        <lable class="lbl-return-style">Total Value of Returns :</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <lable class="lbl-return-style2 " id="lbl_totalRetVal"></lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <lable class="lbl-return-style">Total no.of Return Items :</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <lable class="lbl-return-style2 " id="lbl_totalRetQty"></lable>
                    </div>
                    <div class="col-md-2 justify-content-between btn2-style">
                        
                            <button id="searchReturnBill" type="button" class="btn btn-outline-success aligh-right"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
                        
                        
                            <button id="searchReturnBill" type="button" class="btn btn-outline-danger aligh-right"><i class="fa fa-times" aria-hidden="true"></i> Clear</button>
                        
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

        // document.getElementById("totalDiscount").disabled = true;
        // document.getElementById("totalAmount").disabled = true;
        // document.getElementById("balance").disabled = true;

        //  $('#payAmount').on('keyup', function() {
        //     if($.trim(this.value).length) {
        //         var balance =parseFloat(this.value).toFixed(2) - parseFloat($('#totalAmount').val()).toFixed(2); 
                            
        //         $('#balance').val(balance);
        //     }
        // });

        // var rows = "";
        // // function for adding data to sale table 
        // document.getElementById('add-btn').onclick = function AddData() {
        //     var itemCode = document.getElementById("itemCode").value;
        //     var itemName = document.getElementById("itemName").value;
        //     var unitDiscount = document.getElementById("discount").value;
        //     var unitPrice = document.getElementById("unitPrice").value;
        //     var itemQty = document.getElementById("itemQty").value;

        //     var discount=unitDiscount*itemQty;
        //     var price=itemQty*(unitPrice-unitDiscount);
            
        //     console.log("discount", discount);
            
            
            function addSelectedReturnData(){
                row = "<tr><td><a href='javascript:void(0);'  class='delete' title='Delete' data-toggle='tooltip'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td><td>" + itemCode + "</td><td>" + itemName + "</td><td>"  + unitPrice + "</td><td>" + itemQty + "</td><td class='countableDis'> " + discount + "</td><td class='countablePrice'>"+price+"</td></tr>";
                $(row).appendTo("#itemList tbody");
            }

            //<a href='javascript:void(0);'  class='delete' title='Delete' data-toggle='tooltip'><i class="fa fa-trash-o" aria-hidden="true"></i></a>

        //     row = "<tr><td><a  class='delete' title='Delete' data-toggle='tooltip'><i class='fas fa-trash-alt fa-fw'></i></a></td><td>" + itemCode + "</td><td>" + itemName + "</td><td>"  + unitPrice + "</td><td>" + itemQty + "</td><td class='countableDis'> " + discount + "</td><td class='countablePrice'>"+price+"</td></tr>";
        //     $(row).appendTo("#itemList tbody");

        //     //calling Sum of Discounts(total Discount) function
        //     calSumDis();
        //     //calling Sum of price(total price) function
        //     calSumPrice();

            

        //     document.getElementById('itemCode').value = '';
        //     document.getElementById('itemName').value = '';
        //     document.getElementById('itemCat').value = '';
        //     document.getElementById('discount').value = '';
        //     document.getElementById('unitPrice').value = '';
        //     document.getElementById('itemQty').value = '';
   
        // }

        

        $(document).on('click','.delete',function(){

            var result = confirm("Do you Want to delete this item?");
                if (result) {
                    $(this).parent().parent().remove();

                    
                    //calling Sum of price(total price) function
                    calSumofPrice();
                    calSumofReturnQTY();
                }    
            
    
        });

        
        document.getElementById('btn-addTo-returnList').onclick = function addReturnData(){

        
            calSumofPrice(); 
            calSumofReturnQTY();

        }

        function calSumofPrice(){
            var cls = document.getElementById("returnItemList").getElementsByTagName("td");
            var sum1 = 0;
            for (var i = 0; i < cls.length; i++){
                if(cls[i].className == "countablePrice"){
                    sum1 += isNaN(cls[i].innerHTML) ? 0 : parseInt(cls[i].innerHTML);
                }
            }
             console.log(sum1);  
            $('#lbl_totalRetVal').html(sum1.toFixed(2));

        }

        function calSumofReturnQTY(){
            var cls = document.getElementById("returnItemList").getElementsByTagName("td");
            var sum2 = 0;
            for (var i = 0; i < cls.length; i++){
                if(cls[i].className == "countableQty"){
                    sum2 += isNaN(cls[i].innerHTML) ? 0 : parseInt(cls[i].innerHTML);
                }
            }
             console.log(sum2);  
            $('#lbl_totalRetQty').html(sum2);

        }

        // document.getElementById('refresh-btn').onclick = function clearData() {
        //     document.getElementById('itemCode').value = '';
        //     document.getElementById('itemName').value = '';
        //     document.getElementById('itemCat').value = '';
        //     document.getElementById('discount').value = '';
        //     document.getElementById('unitPrice').value = '';
        //     document.getElementById('itemQty').value = '';
        
        // }

        // //Sum of Discounts(total Discount) function
        // function calSumDis(){
        //     var cls = document.getElementById("itemList").getElementsByTagName("td");
        //     var sum1 = 0;
        //     for (var i = 0; i < cls.length; i++){
        //         if(cls[i].className == "countableDis"){
        //             sum1 += isNaN(cls[i].innerHTML) ? 0 : parseInt(cls[i].innerHTML);
        //         }
        //     }
            
        // document.getElementById('totalDiscount').value = sum1;
        // }

        // //Sum of price(total Price) function
        // function calSumPrice(){
        //     var cls = document.getElementById("itemList").getElementsByTagName("td");
        //     var sum2 = 0;
        //     for (var i = 0; i < cls.length; i++){
        //         if(cls[i].className == "countablePrice"){
        //             sum2 += isNaN(cls[i].innerHTML) ? 0 : parseInt(cls[i].innerHTML);
        //         }
        //     }
            
        // document.getElementById('totalAmount').value = sum2;
        // }
        

        $('.return-checkbox').on('change', function() {
            console.log ($(this).closest('tr').find('.return-qty'));
           
            // $(this).parent().parent().parent().find('.return-qty').prop("disabled", false);
            if ($(this).prop('checked')){
                $(this).closest('tr').find('.return-qty').prop("disabled", false);
            }else
            {
                $(this).closest('tr').find('.return-qty').prop("disabled", true);
                $(this).closest('tr').find('.return-qty').val(''); 
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
