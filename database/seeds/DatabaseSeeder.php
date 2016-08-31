<?php
use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
use App\Tag;
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
        DB::table('posts_tags')->delete();
        Comment::truncate();
        Tag::truncate();
        Post::truncate();
        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}