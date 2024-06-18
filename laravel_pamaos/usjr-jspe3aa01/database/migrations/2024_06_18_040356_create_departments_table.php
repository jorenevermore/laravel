<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('deptid');
            $table->string('deptfullname', 100);
            $table->string('deptshortname', 20)->nullable();
            $table->integer('deptcollid')->unsigned();
            $table->timestamps();

            $table->foreign('deptcollid')
                ->references('collid')
                ->on('colleges')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('departments');
    }
};
