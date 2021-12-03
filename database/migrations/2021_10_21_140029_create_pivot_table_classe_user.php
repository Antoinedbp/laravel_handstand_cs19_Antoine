<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableClasseUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classe_id')->constrained('classes', 'id')->nullable()->unsigned()->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users', 'id')->nullable()->unsigned()->onDelete('cascade');
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
        Schema::dropIfExists('pivot_table_classe_user');
    }
}
