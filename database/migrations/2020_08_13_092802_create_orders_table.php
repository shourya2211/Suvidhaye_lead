<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('order_code');
            $table->string('user_code');
            $table->string('prod_code');
            $table->int('quantity');
            $table->float('total_price');
            $table->float('billing_price');
            $table->int('order_status');
            $table->string('deliverymen_code')->nullable();
            $table->string('coupon_code');
            $table->int('payment_mode');
            $table->float('due_amount')->nullable();
            $table->string('reviews')->nullable();
            $table->float('ratings')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
