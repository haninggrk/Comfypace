<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClassScheduleSessionStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('user_class_schedule_session_statuses', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->timestamps();
        
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_class_schedule_session_statuses');
    }
}
