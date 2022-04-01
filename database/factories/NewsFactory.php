<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(),
            "content" => $this->faker->paragraph(),
            "view_count" => rand(100, 500),
            "category_id" => rand(1, 6),
            "user_id" => rand(1, 5),
            "is_hot" => $this->faker->boolean(20),
        ];
    }
}
