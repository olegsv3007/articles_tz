<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()
            ->count(10)
            ->create()
            ->each(function ($author) {
                $author->articles()->saveMany(
                    Article::factory()
                        ->count(rand(0, 20))
                        ->make()
                );
            })
        ;
    }
}
