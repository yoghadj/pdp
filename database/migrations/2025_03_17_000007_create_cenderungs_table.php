<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenderungsTable extends Migration
{
    public function up()
    {
        Schema::create('cenderungs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nilai');
            $table->string('pola');
            $table->string('kemungkinan');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
