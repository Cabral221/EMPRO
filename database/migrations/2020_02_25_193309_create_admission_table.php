<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('kind');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('phone');
            $table->string('email');
            $table->date('birthday');
            $table->string('city_of_both');
            $table->string('address');
            $table->boolean('computer');
            $table->boolean('informatic');
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
        Schema::dropIfExists('admissions');
    }
}
