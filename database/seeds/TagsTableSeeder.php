<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Tag',10)->create();

        $posts = \App\Post::all();

        foreach ($posts as $post)
        {
            $total = rand(1,3);
            $tags = [];
            for($j = 0; $j < $total; $j ++)
            {
                array_push($tags,rand(1,10));
            }
            $post->tags()->sync($tags);
        }
    }
}
