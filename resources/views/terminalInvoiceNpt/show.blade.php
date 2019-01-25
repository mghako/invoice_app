
@extends('layouts.partials.terminalNptVoucher')
@section('content')
<div class="invoice voucher_container">
   <div class="top_title">
        <h2 class="station_name"><strong>TERMINAL</strong></h2>
        <h4 class=""><strong>{{ $invoice->petrol_type }}</strong> &nbsp;&nbsp;&nbsp; <span class="station_location">NPT</span></h4>
    </div>
    <table class="price_table_info" border="0" width="310px">
        <tr>
            <td class="no_border">Vr No:</td>
            <td class="t_row no_border">C1-59</td>
            <td colspan="2" class="t_row hav_border">Date: 24-Jan-2019 12:52</td>
        </tr>
        <tr>
            <td class="no_border">Pump:</td>
            <td class="t_row no_border">{{ $invoice->pump_no }}</td>
            <td class="t_row hav_border">ယာဥ္အမွတ္</td>
            <td class="f_row hav_border">{{ $invoice->car_no }}</td>
        </tr>
        <tr>
            <td class="hav_border"><u>Gal</u></td>
            <td class="t_row hav_border"><u>Liter</u></td>
            <td class="t_row hav_border"><u>Price</u></td>
            <td class="f_row hav_border"><u>Amount</u></td>
        </tr>
        <tr>
            <td class="hav_border">{{ $invoice->gallon }}</td>
            <td class="t_row hav_border">{{ $invoice->liter }}</td>
            <td class="t_row hav_border"> {{ $invoice->price }}</td>
            <td class="f_row hav_border">{{ $invoice->amount }}</td>
        </tr>
    </table>
    <br>
    <p class="text-center amount_in_kyats">က်ပ္ - {{ $invoice->amount_in_kyats }} - တိတိ</p>


    <!-- this row will not appear when printing -->
    <div class="row no-print d-print-none">
    <div class="col-12">
        <a href="#" onclick="javascript:window.print()" target="_blank" class="btn btn-danger"><i class="fa fa-print"></i> Print</a>
        <a href="{{ route('terminal_invoice_npt.index') }}" class="btn btn-info">Back</a>
    </div>
    </div>
</div>
@endsection








