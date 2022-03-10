<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition()
    {
        $created_at = $this->faker->dateTimeBetween('-1 year', now());
        $updated_at = $this->faker->dateTimeBetween($created_at, now());

        return [
            'title' => $this->faker->sentence(),
            'short_text' => $this->faker->text(300),
            'text' => $this->faker->paragraphs(5, true),
            'image_filename' => $this->faker->image(public_path('img/articles/'), 480, 320, null, false),
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ];
    }
}
