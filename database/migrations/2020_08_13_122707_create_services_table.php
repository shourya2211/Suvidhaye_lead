<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_code');
            $table->string('service_name');
            $table->string('providers')->nullable();
            $table->string('category_id');
            $table->string('highlights')->nullable();
            $table->string('short_des')->nullable();
            $table->string('long_des')->nullable();
            $table->string('specifications')->nullable();
            $table->string('availibility')->nullable();
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
        Schema::dropIfExists('services');
    }
}
