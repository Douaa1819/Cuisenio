<?php

namespace Database\Factories;

use App\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Theme>
 */
class ThemeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Theme::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Traditional',
                'Easy & Quickly',
                'Weekend',
                'Holiday',
                'Desert',
                'International'
            ]),
        ];
    }
}