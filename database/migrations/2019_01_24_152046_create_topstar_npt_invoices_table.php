<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopstarNptInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topstar_npt_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('petrol_type');
            $table->string('voucher_no');
            $table->string('pump_no');
            $table->string('date');
            $table->string('car_no');
            $table->string('gallon');
            $table->string('liter');
            $table->string('price');
            $table->string('amount');
            $table->string('amount_in_kyats');
            $table->string('cashier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topstar_npt_invoices');
    }
}
