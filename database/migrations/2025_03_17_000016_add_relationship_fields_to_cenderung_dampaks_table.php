<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCenderungDampaksTable extends Migration
{
    public function up()
    {
        Schema::table('cenderung_dampaks', function (Blueprint $table) {
            $table->unsignedBigInteger('cenderung_id')->nullable();
            $table->foreign('cenderung_id', 'cenderung_fk_10495445')->references('id')->on('cenderungs');
            $table->unsignedBigInteger('dampak_id')->nullable();
            $table->foreign('dampak_id', 'dampak_fk_10495446')->references('id')->on('dampaks');
        });
    }
}
