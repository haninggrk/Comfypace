<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassLevelsTable extends Migration
{
    public function up()
    {
        Schema::create('class_levels', function (Blueprint $table) {

            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('level_id');
            $table->boolean('is_active');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('level_id')->references('id')->on('levels');
        
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_levels');
    }
}
