<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFemalebesttyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('female_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('body');
            $table->integer('Ya');
            $table->integer('Yb');
            $table->integer('Yc');
            $table->integer('Na');
            $table->integer('Nb');
            $table->integer('Nc');
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
        Schema::dropIfExists('femalebestty');
    }
}
