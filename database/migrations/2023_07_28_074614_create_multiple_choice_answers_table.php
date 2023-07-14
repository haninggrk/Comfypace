<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultipleChoiceAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('multiple_choice_answers', function (Blueprint $table) {

            $table->id();
            $table->string('img');
            $table->string('text');
            $table->unsignedBigInteger('multiple_choice_question_id');
            $table->foreign('multiple_choice_question_id')->references('id')->on('multiple_choice_questions');
            $table->timestamps();
        
        });
    }

    public function down()
    {
        Schema::dropIfExists('multiple_choice_answers');
    }
}
