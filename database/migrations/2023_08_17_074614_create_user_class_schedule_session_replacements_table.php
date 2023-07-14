<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClassScheduleSessionReplacementsTable extends Migration
{
    public function up()
    {
        Schema::create('user_class_schedule_session_replacements', function (Blueprint $table) {

            $table->id();
            $table->string('note');
            $table->integer('credit_used');
            $table->datetime('check_in_time');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('class_schedule_id');
            $table->unsignedBigInteger('user_class_schedule_session_status_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('class_schedule_id','csid')->references('id')->on('class_schedules');
            $table->foreign('user_class_schedule_session_status_id','ucsssid')->references('id')->on('user_class_schedule_session_statuses');
            $table->timestamps();
        
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_class_schedule_session_replacements');
    }
}
