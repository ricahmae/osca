<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id('AID');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('extname');
            $table->string('dateOfBirth');
            $table->string('gender');
            $table->string('contactNumber');
            $table->unsignedBigInteger('fk_BID');
            $table->foreign('fk_BID')->references('BID')->on('Barangays');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
};
