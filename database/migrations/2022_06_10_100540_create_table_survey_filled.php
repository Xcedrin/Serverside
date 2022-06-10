<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSurveyFilled extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_filled', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
//                ->constrained('users')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
            $table->foreignId('question_id');
//                ->constrained('questions')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
            $table->string('option');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_filled');
    }
}
