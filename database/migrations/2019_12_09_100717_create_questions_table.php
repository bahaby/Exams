<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lecture_id');
            $table->bigInteger('lesson_id');
            $table->bigInteger('answer');
            $table->text('text');
            $table->timestamps();

            $table->foreign('lecture_id')->references('id')
                ->on('lectures')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('lesson_id')->references('id')
                ->on('lessons')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
