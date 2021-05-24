<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reading',250)->nullable();
            $table->string('vocabulary',250)->nullable();
            $table->string('grammary',250)->nullable();
            $table->string('verbs',250)->nullable();
            $table->string('math',250)->nullable();
            $table->string('english',250)->nullable();
            $table->string('oral',250)->nullable();
            $table->string('history',250)->nullable();
            $table->string('science',250)->nullable(); 
            $table->text('autre')->nullable();
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
        Schema::dropIfExists('studies');
    }
}
