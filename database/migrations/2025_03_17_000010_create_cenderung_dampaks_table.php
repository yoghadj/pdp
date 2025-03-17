<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenderungDampaksTable extends Migration
{
    public function up()
    {
        Schema::create('cenderung_dampaks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nilai');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
