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
            $table->bigIncrements('id');
            $table->bigInteger('exam_id');
            $table->bigInteger('question_id');
            $table->enum('answer', array('A', 'B', 'C', 'D'))->nullable();
            $table->timestamps();

            $table->unique(['question_id', 'exam_id']);
            
            $table->foreign('exam_id')->references('id')
                ->on('exams')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('question_id')->references('id')
                ->on('questions')->onDelete('cascade')->onUpdate('cascade');

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
