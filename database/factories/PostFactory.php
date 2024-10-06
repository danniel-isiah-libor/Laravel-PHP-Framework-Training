<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    /**
     * Post::factory(10)->create()
     * Post::factory()->count(10)->create()
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::factory(),
            'title' => fake()->sentence(),
            'body' =>fake()->paragraph()
        ];
    }
}
