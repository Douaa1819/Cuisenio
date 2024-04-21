<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('description');
            $table->foreignId('theme_id')->constrained('themes');
            $table->text('steps');
            $table->text('list_ingredients');
            $table->integer('duration_preparation'); 
            $table->enum('level', ['biginner', 'intermediate', 'advanced', 'expert']);
            $table->enum('season', ['winter', 'spring', 'summer', 'autumn' ,' all seasn']);
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
        Schema::dropIfExists('recipes');
    }
}
