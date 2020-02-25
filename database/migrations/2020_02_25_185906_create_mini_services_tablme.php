<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiniServicesTablme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miniservices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libele');
            $table->integer('service_id');
            $table->flàot('prix');
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
        Schema::dropIfExists('miniservices');
    }
}
