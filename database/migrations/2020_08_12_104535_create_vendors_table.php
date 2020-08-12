<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends 
$table->string('vemdor_id');
$table->string('vemdor_id');
$table->string('vemdor_id');
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id');
            $table->string('shop_name');
            $table->string('owner_name');
            $table->string('shop_address');
            $table->string('address_proof1');
            $table->string('address_proof2')->nullable();
            $table->string('phoneno');
            $table->string('orders_completed');
            $table->date('doj');
            $table->date('dol');
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
        Schema::dropIfExists('vendors');
    }
}
