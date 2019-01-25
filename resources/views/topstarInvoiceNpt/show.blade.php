
@extends('layouts.partials.topStarNptVoucher')
@section('content')
<div class="invoice voucher_container">
   <div class="top_title">
        <h2 class="station_name"><strong>TOP STAR</strong></h2>
        <p class="address_one">ပ်ဥ္းမနားေတာင္ညုိလမ္းႏွင္႔ရတနာေအာင္ေျမလမ္းေထာင္႔</p>
        <p class="address_two">ဆြာလမ္းဆံုအနီးဇမၺဴသီရိျမိဳ႔၊ ေနျပည္ေတာ္</p>
        <p class="phone_num_txt"><img src="/img/telephone.png" alt="" width="20"> : <strong>067 401436</strong></p>
        <h4 class="petrol_type"><strong>{{ $invoice->petrol_type }}</strong></h4>
    </div>
    <table class="price_table_info" border="0" width="310px">
        <tr>
            <td class="no_border">Vr No:</td>
            <td class="t_row no_border">C1-59</td>
            <td colspan="2" class="t_row">Date: 24-Jan-2019 12:52</td>
        </tr>
        <tr>
            <td class="no_border">Pump:</td>
            <td class="t_row no_border">{{ $invoice->pump_no }}</td>
            <td class="t_row">ယာဥ္အမွတ္</td>
            <td class="f_row">{{ $invoice->car_no }}</td>
        </tr>
        <tr>
            <td class=""><u>Gal</u></td>
            <td class="t_row"><u>Liter</u></td>
            <td class="t_row"><u>Price</u></td>
            <td class="f_row"><u>Amount</u></td>
        </tr>
        <tr>
            <td class="">{{ $invoice->gallon }}</td>
            <td class="t_row">{{ $invoice->liter }}</td>
            <td class="t_row"> {{ $invoice->price }}</td>
            <td class="f_row">{{ $invoice->amount }}</td>
        </tr>
    </table>
    <br>
    <p class="text-center amount_in_kyats">က်ပ္ - {{ $invoice->amount_in_kyats }} - တိတိ</p>
    <p class="text-center address_one">Cashier - {{ $invoice->cashier}}</p>


    <!-- this row will not appear when printing -->
    <div class="row no-print d-print-none">
    <div class="col-12">
        <a href="#" onclick="javascript:window.print()" target="_blank" class="btn btn-danger"><i class="fa fa-print"></i> Print</a>
        <a href="{{ route('topstar_invoice_npt.index') }}" class="btn btn-info">Back</a>
    </div>
    </div>
</div>
@endsection








