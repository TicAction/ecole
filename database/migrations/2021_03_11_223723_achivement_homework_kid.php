<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AchivementHomeworkKid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achivement_homework_kid', function (Blueprint $table) {
            $table->foreignId('kid_id')->references('id')->on('kids')->cascadeOnDelete();
            $table->foreignId('achivment_id')->references('id')->on('achivement')->cascadeOnDelete();
            $table->foreignId('homework_id')->references('id')->on('homework')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
