<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->uuid('invoice');
            $table->bigInteger('shipping_cost');
            $table->string('courier');
            $table->bigInteger('total');
            $table->foreignId('users_id')->constrained();
            $table->double('discount');
            $table->enum('status',['Not Approved','Approved','Rejected','Cancel'])->default('Not Approved');
            $table->text('delivery_address');
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
