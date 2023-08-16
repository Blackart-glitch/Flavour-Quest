<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('recipe_meal_plan', function (Blueprint $table) {
            $table->foreignId('recipe_id')->constrained();
            $table->foreignId('meal_plan_id')->constrained();
            $table->primary(['recipe_id', 'meal_plan_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_meal_plan');
    }
};
