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
        $users = User::factory()
            ->count(3)
            ->create()
        ;

        foreach ($users as $user) {
            Article::factory()
                ->count(5)
                ->state([
                    'author_id' => $user->id,
                ])
                ->create()
                ->each(function ($article) use ($users) {
                    $article->comments()->saveMany(
                        Comment::factory()
                            ->count(rand(0, 12))
                            ->state([
                                'author_id' => $users->random()->first()->id,
                            ])
                            ->make()
                    );
                })
            ;
        }
    }
}
