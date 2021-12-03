<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('description');
            $table->string('mail');
            $table->string('tel');
            $table->string('adress');
            $table->string('titre_1');
            $table->string('tweet_1');
            $table->string('site_1');
            $table->string('tweet_2');
            $table->string('site_2');
            $table->string('btn');
            $table->string('copyright');
            $table->foreignId('map_id')->constrained('maps','id')->onDelete('cascade');
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
        Schema::dropIfExists('footers');
    }
}
