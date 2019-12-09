<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->bigInteger('exam_id');
            $table->bigInteger('question_id');
            $table->bigInteger('choice_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('exam_id')->references('id')
                ->on('exams')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('question_id')->references('id')
                ->on('questions')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('choice_id')->references('id')
                ->on('choices')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
