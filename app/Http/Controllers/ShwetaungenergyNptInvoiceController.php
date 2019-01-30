<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShwetaungenergyNptInvoice;
use Illuminate\Support\Facades\DB;

class ShwetaungenergyNptInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = ShwetaungenergyNptInvoice::orderBy('id', 'DESC')->paginate(8);
        // $invoices = DB::table('shwetaungenergy_npt_invoices')->simplePaginate(8);
        // $invoices = ShwetaungenergyNptInvoice::paginate(10);
        return view('shwetaungenergyInvoiceNpt.index',  ['invoices' => $invoices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shwetaungenergyInvoiceNpt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = ShwetaungenergyNptInvoice::create([
            'grade'=> $request->grade,
            'voucher_no'=> $request->voucher_no,
            'pump_no' => $request->pump_no,
            'date' => $request->date,
            'car_no' => $request->car_no,
            'gallon' => $request->gallon,
            'liter' => $request->liter,
            'price' => $request->price,
            'amount' => $request->amount,
            'att_name' => $request->att_name
        ]);
        $invoice->save();
        return redirect()->route('shwetaungenergy_invoice_npt.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = ShwetaungenergyNptInvoice::findOrfail($id);
        return view('shwetaungenergyInvoiceNpt.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = ShwetaungenergyNptInvoice::findOrFail($id);
        $invoice->delete();
        return view('shwetaungenergyInvoiceNpt.index');
    }
}
