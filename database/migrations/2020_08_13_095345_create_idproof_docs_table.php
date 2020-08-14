<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdproofDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idproof_docs', function (Blueprint $table) {
            $table->id();
            $table->string('user_code');
            $table->string('adhaar_card');
            $table->string('id_proof2');
            $table->string('address_proof1');
            $table->string('address_proof2');
            $table->string('vehicle1');
            $table->string('vehicle2');
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
        Schema::dropIfExists('idproof_docs');
    }
}
