<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('studid');
            $table->string('studfirstname', 50);
            $table->string('studlastname', 50);
            $table->string('studmidname', 50)->nullable();
            $table->integer('studprogid')->unsigned();
            $table->integer('studcollid')->unsigned();
            $table->integer('studyear');
            $table->timestamps();

            $table->foreign('studprogid')
                ->references('progid')
                ->on('programs')
                ->onDelete('cascade');

            $table->foreign('studcollid')
                ->references('collid')
                ->on('colleges')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
