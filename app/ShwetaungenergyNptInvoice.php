<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShwetaungenergyNptInvoice extends Model
{
	protected $fillable = [
		'att_name','grade','voucher_no','pump_no','date','car_no','gallon','liter','price','amount'
	];
}
