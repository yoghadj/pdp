<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAssessesTable extends Migration
{
    public function up()
    {
        Schema::table('assesses', function (Blueprint $table) {
            $table->unsignedBigInteger('proses_id')->nullable();
            $table->foreign('proses_id', 'proses_fk_10495506')->references('id')->on('kategoris');
            $table->unsignedBigInteger('nilai_kemungkinan_id')->nullable();
            $table->foreign('nilai_kemungkinan_id', 'nilai_kemungkinan_fk_10495509')->references('id')->on('cenderungs');
            $table->unsignedBigInteger('nilai_dampak_id')->nullable();
            $table->foreign('nilai_dampak_id', 'nilai_dampak_fk_10495510')->references('id')->on('dampaks');
            $table->unsignedBigInteger('nilai_kontrol_kemungkinan_id')->nullable();
            $table->foreign('nilai_kontrol_kemungkinan_id', 'nilai_kontrol_kemungkinan_fk_10495513')->references('id')->on('cenderungs');
            $table->unsignedBigInteger('nilai_kontrol_dampak_id')->nullable();
            $table->foreign('nilai_kontrol_dampak_id', 'nilai_kontrol_dampak_fk_10495514')->references('id')->on('dampaks');
            $table->unsignedBigInteger('nilai_residu_kemungkinan_id')->nullable();
            $table->foreign('nilai_residu_kemungkinan_id', 'nilai_residu_kemungkinan_fk_10495522')->references('id')->on('cenderungs');
            $table->unsignedBigInteger('nilai_residu_dampak_id')->nullable();
            $table->foreign('nilai_residu_dampak_id', 'nilai_residu_dampak_fk_10495523')->references('id')->on('dampaks');
        });
    }
}
