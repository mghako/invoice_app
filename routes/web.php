<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('terminal_invoice', 'TerminalInvoiceController');

Route::resource('terminal_invoice_npt', 'TerminalNptInvoiceController');

Route::resource('topstar_invoice_npt', 'TopstarNptInvoiceController');
