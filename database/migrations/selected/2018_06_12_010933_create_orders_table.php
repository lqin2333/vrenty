<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('vehicle_id');
            $table->bigInteger('pickup_timestamp');
            $table->bigInteger('return_timestamp');
            $table->integer('pickup_location');
            $table->integer('return_location');
            $table->timestampsTz();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
