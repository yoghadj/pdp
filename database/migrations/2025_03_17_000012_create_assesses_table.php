<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessesTable extends Migration
{
    public function up()
    {
        Schema::create('assesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isu');
            $table->string('risiko');
            $table->integer('total')->nullable();
            $table->string('tindakan_pengendalian')->nullable();
            $table->integer('nilai_kontrol_total')->nullable();
            $table->string('tindakan')->nullable();
            $table->string('tinjut_penanganan')->nullable();
            $table->string('persetujuan_tindakan')->nullable();
            $table->date('target_penyelesaian')->nullable();
            $table->string('status')->nullable();
            $table->string('penanggung_jawab')->nullable();
            $table->integer('nilai_residu_total')->nullable();
            $table->string('tindakan_residu')->nullable();
            $table->string('tinjut_residual')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
