<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()
            ->count(15)
            ->create()
            ->each(function ($author) {
                $author->articles()->saveMany(
                    Article::factory()
                        ->count(rand(0,6))
                        ->make()
                );
            });
        ;

        $articles = Article::all();

        Comment::factory()
            ->count(150)
            ->state([
                'author_id' => function() { return User::all()->random()->id; },
                'article_id' => function() { return Article::all()->random()->id; },
            ])
            ->create();
        ;


    }
}
