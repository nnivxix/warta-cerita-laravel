<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Story>
 */
class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'        => $this->faker->sentence,
            'slug'         => $this->faker->slug,
            'content'      => $this->faker->paragraphs(3, true),
            'published_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
