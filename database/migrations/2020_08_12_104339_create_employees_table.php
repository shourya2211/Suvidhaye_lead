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
            $table->string('emp_code');
            $table->string('f_name');
            $table->string('s_name');
            $table->string('name');
            $table->string('profile_pic')->nullable();
            $table->string('phoneno');
            $table->string('joining_designatiopn')->nullable();
            $table->string('current_designation')->nullable();
            $table->string('proj_comp')->nullable();
            $table->string('failed_proj')->nullable();
            $table->string('doj')->nullable();
            $table->string('dol')->nullable();
            $table->int('active_status')->nullable();
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
