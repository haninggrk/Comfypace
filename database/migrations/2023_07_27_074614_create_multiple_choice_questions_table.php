<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultipleChoiceQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('multiple_choice_questions', function (Blueprint $table) {

            $table->id();
            $table->string('text');
            $table->string('correct_option');
            $table->integer('score');
            $table->unsignedBigInteger('exercise_question_id');
            $table->foreign('exercise_question_id')->references('id')->on('exercise_questions');
            $table->timestamps();
        
        });
    }

    public function down()
    {
        Schema::dropIfExists('multiple_choice_questions');
    }
}
