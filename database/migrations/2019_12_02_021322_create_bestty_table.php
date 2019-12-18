<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBesttyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('male_questions', function (Blueprint $table) {
=======
    Schema::create('male_questions', function (Blueprint $table) {
>>>>>>> master
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
        Schema::dropIfExists('male_questions');
    }
}
