<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table > TRAINERS
        Schema::create('trainers', function (Blueprint $table) {
            $table->id('trainer_id');
            $table->timestamps();
            $table->string('first_name');
            $table->string('second_name');
            $table->integer('age');
            $table->text('description');
            $table->integer('photo_id')->unique();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}
