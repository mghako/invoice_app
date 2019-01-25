<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopstarNptInvoice extends Model
{
    protected $fillable = [
   	'petrol_type','voucher_no','pump_no','date','car_no','gallon','liter','price','amount','amount_in_kyats','cashier'
   ];
}
