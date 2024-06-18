<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegesTable extends Migration
{
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->increments('collid');
            $table->string('collfullname', 100);
            $table->string('collshortname', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('colleges');
    }
};

