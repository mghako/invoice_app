
@extends('layouts.partials.shwetaungenergyNptVoucher')
@section('content')
<div class="invoice voucher_container">
    <div class="top_title">
        <p class="float-left"><img src="/img/highway_logo.png" alt=""width="100px"></p>
        <p class="float-right">&nbsp;<strong><span class="station_name">Shwe Taung Energy Co.,Ltd</span></strong> <br> <span class="address_one add_info">(ေနျပည္ေတာ္) <br> <span  class="address_one">ရာဇသဂၤဟ လမ္းမၾကီး ၊ ဒကိၡဏသီရိျမိဳ႔နယ္္</span></p>
        <div class="clearfix mb-1"></div>          
    </div>
    <p class="text-center"><img src="/img/petrol_station_icon.png" alt="" width="25px" class="petrol_station_icon"> <span class="voucher_mid_txt"><u>Voucher</u></span> <span><strong>Cash</strong></span></p>    
    <table class="table customer_info no-border" border="0">
        <tr>
            <td width="80px" class="p0"><strong>Car No:</strong></td>
            <td><span>{{ $invoice->car_no }}</span></td>
            <td id="customer_date_info"><strong>Date:</strong></td>
            <td><span><strong>&nbsp;{{ $invoice->date }}</strong></span></td>
        </tr>
    </table>
    <table class="table no-border voucher_info">
        <tr>
            <td colspan="2" class="no_border">Vr No: &nbsp;&nbsp;&nbsp;{{ $invoice->voucher_no }}</td>
            <td colspan="2" class="">Cashier: &nbsp;&nbsp;admin</td>
        </tr>
        <tr>
            <td colspan="2" class="no_border">Att Name: &nbsp;{{ $invoice->att_name }}</td>
            <td colspan="2" class=" no_border">Pump {{ $invoice->pump_no }}</td>
        </tr>
    </table>
    <table class="table price_table_info no-border" border="0" width="310px">        
        <tr>
            <td class=""><u><strong>Grade</strong></u></td>
            <td class=""><u><strong>Gal</strong></u></td>
            <td class=""><u><strong>Liter</strong></u></td>
            <td class=""><u><strong>Price</strong></u></td>
            <td class=""><u><strong>Amount</strong></u></td>
        </tr>
        <tr>
            <td id="border_bot">{{ $invoice->grade }}</td>
            <td id="border_bot">{{ $invoice->gallon }}</td>
            <td id="border_bot">{{ $invoice->liter }}</td>
            <td id="border_bot"> {{ $invoice->price }} </td>
            <td id="border_bot">{{ $invoice->amount }}</td>
        </tr>        
        <tr>
            <td class="low-padding-top">Total</td>
            <td class="low-padding-top">&nbsp;</td>
            <td class="low-padding-top">{{ $invoice->liter }}</td>
            <td>&nbsp;</td>
            <td class="low-padding-top">{{ $invoice->amount}}</td>
        </tr>
    </table>
    <p class="text-center amount_in_kyats">Thank You <br> See You Again. Have a nice Day!</p>


    <!-- this row will not appear when printing -->
    <div class="row no-print d-print-none">
    <div class="col-12">
        <a href="#" onclick="javascript:window.print()" target="_blank" class="btn btn-danger"><i class="fa fa-print"></i> Print</a>
        <a href="{{ route('shwetaungenergy_invoice_npt.index') }}" class="btn btn-info">Back</a>
    </div>
    </div>
</div>
@endsection








