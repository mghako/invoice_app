@extends('layouts.master')

@section('content')
    <div class="col-8 offset-2">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Shwe Taung Energy Gas Station Voucher | NPT</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('shwetaungenergy_invoice_npt.store') }}">
            {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group">
                    <label for="grade">Grade</label>
                    <input type="text" class="form-control" id="grade" name="grade" placeholder="92 Ron" value="92 Ron">
                </div>
                <div class="form-group">
                    <label for="voucher_no">Voucher No</label>
                    <input type="text" class="form-control" id="voucher_no" name="voucher_no" placeholder="INV-2019010600436" value="INV-2019020700436">
                </div>                
                <div class="form-group">
                    <label for="pump_no">Pump No</label>
                    <input type="text" class="form-control" id="pump_no" name="pump_no" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" id="date" name="date" placeholder="24-Jan-2019 12:52" value="13-Feb-19 05:18:59 PM">
                </div>
                <div class="form-group">
                    <label for="car_no">Car Number</label>
                    <input type="text" class="form-control" id="car_no" name="car_no" placeholder="2Q/1890" value="2P-3445">
                </div>
                <div class="form-group">
                    <label for="gallon">Gallon</label>
                    <input type="text" class="form-control" id="gallon" name="gallon" placeholder="" value="5.873">
                </div>
                <div class="form-group">
                    <label for="liter">Liter</label>
                    <input type="text" class="form-control" id="liter" name="liter" placeholder="" value="26.666">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="" value="750">
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="" value="20000">
                </div>
                <div class="form-group">
                    <label for="att_name">Att Name</label>
                    <input type="text" class="form-control" id="att_name" name="att_name" placeholder="Administrator" value="Administrator">
                </div>
                <div class="form-group">
                    <label for="cashier">Cashier</label>
                    <input type="text" class="form-control" id="cashier" name="cashier" placeholder="" value="admin">
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