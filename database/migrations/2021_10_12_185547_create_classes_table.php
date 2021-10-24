<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('titre');
            $table->json('package');
            // $table->foreignId('trainer_id')->constrained('trainers', 'id')->onDelete('cascade');
            $table->string('time');
            $table->date('date');
            // $table->foreignId('categorie_id')->constrained('categories', 'id')->onDelete('cascade');
            $table->boolean('prioritaire');
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
        Schema::dropIfExists('classes');
    }
}
