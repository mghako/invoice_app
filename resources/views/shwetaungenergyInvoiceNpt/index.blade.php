@extends('layouts.master')

@section('content')
	<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Shwe Taung Energy Voucher List - Npt</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <a href="{{ route('topstar_invoice_npt.create') }}" class="btn btn-info">Add New Invoice</a>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <tbody>
          <tr>
            <th>ID</th>
            <th>Car No</th>
            <th>Liter</th>
            <th>Amount</th>
            <th>Action</th>
          </tr>
          @foreach($invoices as $invoice)
          <tr>
            <td>{{ $invoice->id }}</td>
            <td>{{ $invoice->car_no }}</td>
            <td>{{ $invoice->liter }}</td>
            <td>{{ $invoice->amount }}</td>
            <td>
              <a class="btn btn-info float-left" href="{{ route('shwetaungenergy_invoice_npt.show', $invoice->id ) }}">View</a>
              <form action="{{ route('topstar_invoice_npt.destroy',$invoice->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="delete">
                <button type="submit" class="btn btn-danger float-left ml-2">Delete</button>
                
              </form>
            </td>
          <tr>
          @endforeach
        </tbody>
      </table>    
      </div>   
      <!-- /.card-body -->
    </div>
    <p class="">{{ $invoices->links() }}</p>
  </div>
@endsection