<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Author::factory(5) // 5 authors
            ->has(
                Post::factory(3) // each author has 3 posts
                    ->has(Comment::factory(2)) // each post has 2 comments
            )
            ->create();
    }
}
