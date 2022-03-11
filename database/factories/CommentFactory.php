<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        $numberOfUsers = User::all()->count();

        return [
            'comment' => $this->faker->text(200),
        ];
    }
}
