<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $posts = Post::all();

        if ($users->isEmpty() || $posts->isEmpty()) {
            $this->command->warn('No users or posts available — skipping comment seeding.');
            return;
        }

        $comments = Comment::factory(20)->make()->each(function ($comment) use ($users, $posts) {
            $comment->user_id = $users->random()->id;
            $comment->post_id = $posts->random()->id;
            $comment->save();
        });

        Comment::factory(10)->make()->each(function ($reply) use ($comments, $users, $posts) {
            $reply->parent_comment_id = $comments->random()->id;
            $reply->user_id = $users->random()->id;
            $reply->post_id = $posts->random()->id;
            $reply->save();
        });
    }
}
