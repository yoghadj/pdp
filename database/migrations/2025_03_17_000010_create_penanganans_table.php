<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenanganansTable extends Migration
{
    public function up()
    {
        Schema::create('penanganans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('min');
            $table->integer('max');
            $table->string('risiko');
            $table->string('penanganan');
            $table->string('opsi');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
