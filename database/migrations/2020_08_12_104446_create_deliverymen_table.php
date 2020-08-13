<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverymenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverymen', function (Blueprint $table) {
            $table->id();
            $table->string('delmen_id');
            $table->string('f_name');
            $table->string('s_name');
            $table->string('profile_pic');
            $table->string('phoneno');
            $table->string('joining_designatiopn');
            $table->string('current_designation');
            $table->string('deliv_comp');
            $table->string('retur_comp');
            $table->string('failed_req');
            $table->string('doj');
            $table->string('dol');
            $table->string('active_starts');
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
        Schema::dropIfExists('deliverymen');
    }
}
