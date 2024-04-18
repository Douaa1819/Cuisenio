<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('recipes', function (Blueprint $table) {
           DB::statement("ALTER TABLE recipes MODIFY COLUMN season ENUM('winter', 'spring', 'summer', 'autumn', 'all season')");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipes', function (Blueprint $table) {
            DB::statement("ALTER TABLE recipes MODIFY COLUMN season ENUM('winter', 'spring', 'summer', 'autumn')");
        });
    }
};
