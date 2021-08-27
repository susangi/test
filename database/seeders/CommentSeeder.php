<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Comment;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
        [
            'message' => Str::random(5),
            'post_id' => 2,
        ],
        [
            'message' => Str::random(5),
            'post_id' => 2,
        ],
        [
            'message' => Str::random(5),
            'post_id' => 2,
        ],
        [
            'message' => 'First Comment',
            'post_id' => 3,
        ],
        [
            'message' => 'Second Comment',
            'post_id' => 3,
        ],
        [
            'message' => Str::random(5),
            'post_id' => 5,
        ],
    ];

    Comment::insert($comments);
    }
}
