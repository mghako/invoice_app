
@extends('layouts.partials.terminalVoucher')
@section('content')
<div class="invoice voucher_container">
    <div class="top_title">
        <h3>Terminal 201 ({{ $invoice->location }})</h3>
        <h3>PH 09-977838201</h3>
    <h3><em><strong>{{ $invoice->petrol_type }}</strong></em></h3>
    </div>
    <table class="station_info">
        <tr>
            <th>Cashier</th>
            <td class="s_row">{{ $invoice->cashier}}</td>
        </tr>
        <tr>
            <th>Voucher No</th>
        <td class="s_row">{{ $invoice->voucher_no }}</td>
        </tr>
        <tr>
            <th>Pump No</th>
        <td class="s_row">{{ $invoice->pump_no}}</td>
        </tr>
        <tr>
            <th>Date</th>
            <td class="s_row">{{ $invoice->date }}</td>
        </tr>
        <tr>
            <th>ယာဥ္အမွတ္</th>
            <td class="s_row">{{ $invoice->car_no}}</td>
        </tr>
    </table>
    <table class="price_table_info">
        <tr>
            <th><u>Gal</u></th>
            <th class="t_row"><u>Liter</u></th>
            <th class="t_row"><u>Price</th>
            <th colspan="2" class="f_row"><u>Amount</u></th>
        </tr>
        <tr>
            <th>{{ $invoice->gallon }}</th>
            <th class="t_row">{{ $invoice->liter }}</th>
            <th class="t_row"> {{ $invoice->price }}</th>
            <th class="f_row">{{ $invoice->amount }}</th>
        </tr>
    </table>
    <br>
    <p class="text-center">က်ပ္ - {{ $invoice->price_in_kyats }} - တိတိ</p>
    <p class="text-center">Thanks You</p>


    <!-- this row will not appear when printing -->
    <div class="row no-print d-print-none">
    <div class="col-12">
        <a href="#" onclick="javascript:window.print()" target="_blank" class="btn btn-danger"><i class="fa fa-print"></i> Print</a>
        <a href="{{ route('terminal_invoice.index') }}" class="btn btn-info">Back</a>
    </div>
    </div>
</div>
@endsection








