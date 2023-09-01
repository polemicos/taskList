<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * @return array<string, mixed>
     * Define the model's default state.
     *
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph,
            'long_description' => fake()->paragraph(4, true),
            'isChecked' => fake()->boolean,
        ];
    }
}
