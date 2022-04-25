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
        Schema::create('recieve_benefits', function (Blueprint $table) {
            $table->id('RBID');
            $table->string('dateIssued');
            $table->unsignedBigInteger('fk_AID');
            $table->foreign('fk_AID')->references('AID')->on('applicants');
            $table->unsignedBigInteger('fk_BeID');
            $table->foreign('fk_BeID')->references('BeID')->on('benefits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recieve_benefits');
    }
};
