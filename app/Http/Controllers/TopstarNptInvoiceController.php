<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopstarNptInvoice;

class TopstarNptInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = TopstarNptInvoice::paginate(10);
        return view('topstarInvoiceNpt.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('topstarInvoiceNpt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = TopstarNptInvoice::create([
            'petrol_type'=> $request->petrol_type,
            'voucher_no'=> $request->voucher_no,
            'pump_no' => $request->pump_no,
            'date' => $request->date,
            'car_no' => $request->car_no,
            'gallon' => $request->gallon,
            'liter' => $request->liter,
            'price' => $request->price,
            'amount' => $request->amount,
            'amount_in_kyats' => $request->amount_in_kyats,
            'cashier' => $request->cashier
        ]);
        $invoice->save();
        return redirect()->route('topstar_invoice_npt.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = TopstarNptInvoice::findOrFail($id);
        return view('topstarInvoiceNpt.show', compact('invoice'));
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
        $invoice = TopstarNptInvoice::findOrFail($id);
        $invoice->delete();
        return redirect()->route('topstar_invoice_npt.index');
    }
}
