<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDampaksTable extends Migration
{
    public function up()
    {
        Schema::create('dampaks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nilai');
            $table->string('finansial');
            $table->string('compliance');
            $table->string('reputasi');
            $table->string('dampak');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
