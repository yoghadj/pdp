<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorisTable extends Migration
{
    public function up()
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('proses');
            $table->string('stakeholder');
            $table->boolean('kriteria_hukum')->default(0)->nullable();
            $table->boolean('kriteria_spesifik')->default(0)->nullable();
            $table->boolean('kriteria_besar')->default(0)->nullable();
            $table->boolean('kriteria_evaluasi')->default(0)->nullable();
            $table->boolean('kriteria_cocok')->default(0)->nullable();
            $table->boolean('kriteria_teknologi')->default(0)->nullable();
            $table->boolean('kriteria_batas')->default(0)->nullable();
            $table->boolean('pia')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
