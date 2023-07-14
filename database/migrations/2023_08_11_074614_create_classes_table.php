<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_credit');
            $table->unsignedBigInteger('class_type_id');
            $table->foreign('class_type_id')->references('id')->on('class_types');
            $table->timestamps();
        
        });
    }

    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
