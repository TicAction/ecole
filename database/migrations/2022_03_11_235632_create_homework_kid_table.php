<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeworkKidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homework_kid', function (Blueprint $table) {
            $table->foreignId('kid_id')->references('id')->on('kids')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('homework_id')->references('id')->on('homeworks')->onDelete('cascade')->onUpdate('cascade');
            $table->string('sign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homework_kid');
    }
}
