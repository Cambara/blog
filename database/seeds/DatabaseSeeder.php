<?php
use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Truncate
        Comment::truncate();
        Post::truncate();
        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}