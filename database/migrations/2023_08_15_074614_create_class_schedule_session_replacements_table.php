<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassScheduleSessionReplacementsTable extends Migration
{
    public function up()
    {
        Schema::create('class_schedule_session_replacements', function (Blueprint $table) {

            $table->id();
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->string('venue');
            $table->unsignedBigInteger('class_teacher_id');
            $table->unsignedBigInteger('class_schedule_session_id');
            $table->foreign('class_teacher_id')->references('id')->on('class_teachers');
            $table->foreign('class_schedule_session_id','cssid')->references('id')->on('class_schedule_sessions');
            $table->timestamps();
        
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_schedule_session_replacements');
    }
}
