<?php

use Illuminate\Database\Seeder;
use App\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            $post = new Post();
            $post->title = 'Post prova';
            $post->content = 'Content';
            $post->save();
        }
    }
}
