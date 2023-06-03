<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orderID'); // Rename the column to orderID
            $table->unsignedBigInteger('user_id');
            
            $table->foreign('orderID')->references('id')->on('orders')->onDelete('cascade');


            $table->decimal('amount', 8, 2);
            $table->string('account_name');
            $table->string('card_number');
            $table->date('date');
            $table->string('status');
            $table->string('transaction_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
