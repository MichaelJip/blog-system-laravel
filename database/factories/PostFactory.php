<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(6, 8);
        return [
            'title' => $title,
            // 'author' => fake()->name(),
            'author_id' => User::factory(),
            'slug' => Str::slug($title),
            'body' => fake()->text(),
            'date' => fake()->dateTime()->format('j F Y'),
        ];
    }
}
