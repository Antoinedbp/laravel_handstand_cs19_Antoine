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
            $table->foreignId('pricing_id')->constrained('pricings', 'id')->onDelete('cascade');
            $table->foreignId('trainer_id')->constrained('trainers', 'id')->onDelete('cascade');
            $table->foreignId('categorie_id')->constrained('categories', 'id')->onDelete('cascade');
            $table->foreignId('schedule_id')->constrained('schedules','id');
            // $table->foreignId('statut_id')->constrained('statuts','id');
            $table->boolean('prioritaire');
            $table->string('color')->nullable();
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
