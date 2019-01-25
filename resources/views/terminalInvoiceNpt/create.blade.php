@extends('layouts.master')

@section('content')
    <div class="col-8 offset-2">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Terminal Gas Station Voucher | NPT</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('terminal_invoice_npt.store') }}">
            {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group">
                    <label for="petrol_type">Petrol Type</label>
                    <input type="text" class="form-control" id="petrol_type" name="petrol_type" placeholder="Ocatne(ေအာက္တိန္း)">
                </div>
                <div class="form-group">
                    <label for="voucher_no">Voucher No</label>
                    <input type="text" class="form-control" id="voucher_no" name="voucher_no" placeholder="C1-59">
                </div>                
                <div class="form-group">
                    <label for="pump_no">Pump No - ျမန္မာလုိေရးထည္႔ရန္</label>
                    <input type="text" class="form-control" id="pump_no" name="pump_no" placeholder="ပန္႔-၁">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" id="date" name="date" placeholder="24-Jan-2019 12:52">
                </div>
                <div class="form-group">
                    <label for="car_no">Car Number</label>
                    <input type="text" class="form-control" id="car_no" name="car_no" placeholder="၂န/၁၈၉၀">
                </div>
                <div class="form-group">
                    <label for="gallon">Gallon</label>
                    <input type="text" class="form-control" id="gallon" name="gallon" placeholder="">
                </div>
                <div class="form-group">
                    <label for="liter">Liter</label>
                    <input type="text" class="form-control" id="liter" name="liter" placeholder="">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="">
                </div>
                <div class="form-group">
                        <label for="amount_in_kyats">Price in Kyats - ျမန္မာလုိေရးထည္႔ရန္</label>
                        <input type="text" class="form-control" id="amount_in_kyats" name="amount_in_kyats" placeholder="">
                    </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
@endsection