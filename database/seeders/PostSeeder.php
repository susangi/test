<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts =[
        [
            'description' => 'First Post',
        ],
        [
            'description' => 'Second Post',
        ],
        [
            'description' => 'Third Post',
        ],
        [
            'description' => 'Forth Post',
        ],
        [
            'description' => 'Fifth Post',
        ],
    ];

    Post::insert($posts);
    }
}
