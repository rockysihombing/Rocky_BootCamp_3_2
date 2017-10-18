<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('check_in');
            $table->date('check_out');
            $table->decimal('payment');

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');	

            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms');	


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
