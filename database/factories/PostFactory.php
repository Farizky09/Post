<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(10,25)),
            'body' => collect($this->faker->paragraph(mt_rand(10,25)))
                ->map(function ($p) {
                    return "<p>$p</p>";
                })->implode(''),
        ];
    }
}