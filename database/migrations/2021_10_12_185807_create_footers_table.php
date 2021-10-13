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
            $table->string('logo_mail');
            $table->string('mail');
            $table->string('logo_tel');
            $table->string('tel');
            $table->string('logo_adress');
            $table->string('adress');
            $table->string('titre_1');
            $table->string('logo_1');
            $table->string('tweet_1');
            $table->string('site_1');
            $table->string('logo_2');
            $table->string('tweet_2');
            $table->string('site_2');
            $table->string('titre_2');
            $table->string('input_1');
            $table->string('input_2');
            $table->string('input_3');
            $table->string('btn');
            $table->string('copyright');
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
