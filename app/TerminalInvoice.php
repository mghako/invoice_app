<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerminalInvoice extends Model
{
    protected $fillable = [
        'location', 'petrol_type', 'cashier', 'voucher_no','pump_no','date','car_no','gallon','liter','price','amount','price_in_kyats'
    ];
}
