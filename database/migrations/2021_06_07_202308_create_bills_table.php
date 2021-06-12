<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_method_id');
            $table->foreignId('restored_bill_id')->nullable();
            $table->json('user');
            $table->json('branch')->nullable();
            $table->json('products');

            $table->integer('number');
            $table->integer('business_place_label');

            $table->string('label');
            $table->integer('gross');
            $table->integer('net');
            $table->json('taxes');

            $table->string('restoring_reason')->nullable();

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
        Schema::dropIfExists('bills');
    }
}
