<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('ingrediant_recipe', function (Blueprint $table) {
            $table->dropPrimary(['recipe_id', 'ingredient_id']);          
            $table->id();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ingredient_recipe', function (Blueprint $table) {
            $table->dropColumn('id');
        
            $table->primary(['recipe_id', 'ingredient_id']);

        });
       
    }
};
