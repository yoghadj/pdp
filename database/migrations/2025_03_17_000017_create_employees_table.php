<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik')->unique();
            $table->string('name');
            $table->string('position_code');
            $table->string('branch_code');
            $table->string('position_name');
            $table->string('branch_name');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
