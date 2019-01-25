<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerminalInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terminal_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('location');
            $table->string('petrol_type');
            $table->string('cashier');
            $table->string('voucher_no');
            $table->string('pump_no');
            $table->string('date');
            $table->string('car_no');
            $table->string('gallon');
            $table->string('liter');
            $table->integer('price');
            $table->string('price_in_kyats');
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terminal_invoices');
    }
}
