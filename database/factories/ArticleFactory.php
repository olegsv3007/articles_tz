<?php

namespace Database\Factories;

use App\Models\Article;
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
            'text' => '<p>' . implode('</p><p>' , $this->faker->paragraphs(25)) . '</p>',
            'image_filename' => $this->faker->image(public_path(Article::IMAGE_FOLDER), 480, 320, null, false),
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ];
    }
}
