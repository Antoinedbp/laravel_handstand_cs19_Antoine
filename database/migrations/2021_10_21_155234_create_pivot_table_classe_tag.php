<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableClasseTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classe_id')->nullable()->constrained('classes', 'id');
            $table->foreignId('tag_id')->nullable()->constrained('tags', 'id');
            $table->timestamps();
            $table->dropForeign(['classe_id']);
            $table->dropForeign(['tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_table_classe_tag');
    }
}
