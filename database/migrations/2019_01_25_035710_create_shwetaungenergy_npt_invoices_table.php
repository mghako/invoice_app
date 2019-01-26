<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShwetaungenergyNptInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shwetaungenergy_npt_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('grade');
            $table->string('voucher_no');
            $table->string('pump_no');
            $table->string('date');
            $table->string('car_no');
            $table->string('gallon');
            $table->string('liter');
            $table->string('price');
            $table->string('amount');
            $table->string('att_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shwetaungenergy_npt_invoices');
    }
}
