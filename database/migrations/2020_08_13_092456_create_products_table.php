<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('prod_code');
            $table->string('prod_name');
            $table->string('providers')->nullable();
            $table->string('category_id')->nullable();
            $table->string('brand')->nullable();
            $table->string('highlights')->nullable();
            $table->string('short_des')->nullable();
            $table->string('long_des')->nullable();
            $table->string('specifications')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('weight')->nullable();
            $table->string('size')->nullable();
            $table->int('virtual')->nullable();
            $table->int('downloadable')->nullable();
            $table->float('r_price');
            $table->float('s_price')->nullable();
            $table->string('variant_id')->nullable();
            $table->string('sku')->nullable();
            $table->int('stock')->nullable();
            $table->int('stock_alert')->nullable();
            $table->int('backorder')->nullable();
            $table->string('tax_class')->nullable();
            $table->string('shipping_class')->nullable();
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('products');
    }
}
