<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('servmen_code');
            $table->string('f_name');
            $table->string('s_name');
            $table->string('profile_pic');
            $table->string('phoneno');
            $table->string('joining_designatiopn');
            $table->string('current_designation');
            $table->string('proj_comp');
            $table->string('failed_proj');
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
        Schema::dropIfExists('employees');
    }
}
