<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    protected $model = Recipe::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'theme_id' => $this->faker->numberBetween(1, 6), 
            'user_id' => $this->faker->numberBetween(1, 10),
            'duration_preparation' => $this->faker->numberBetween(10, 120),
            'steps' => $this->faker->paragraph,
            'list_ingredients' => $this->faker->sentence,
            'level' => $this->faker->randomElement([ 'Beginner', 'Intermediate', 'advanced']),
            'season' => $this->faker->randomElement(['winter', 'spring', 'summer', 'autumn'])
        ];
    }

    public function configure()
{
    return $this->afterCreating(function (Recipe $recipe) {
        \App\Models\Image::factory()->create([
            'imageable_id' => $recipe->id,
            'imageable_type' => Recipe::class
        ]);
    });
}

}