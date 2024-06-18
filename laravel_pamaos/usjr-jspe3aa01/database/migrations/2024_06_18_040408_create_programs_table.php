<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('progid');
            $table->string('progfullname', 100);
            $table->string('progshortname', 20)->nullable();
            $table->integer('progcollid')->unsigned();
            $table->integer('progcolldeptid')->unsigned();
            $table->timestamps();

            $table->foreign('progcollid')
                ->references('collid')
                ->on('colleges')
                ->onDelete('cascade');

            $table->foreign('progcolldeptid')
                ->references('deptid')
                ->on('departments')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('programs');
    }
};