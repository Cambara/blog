<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 40; $i ++)
        {
            factory('App\Comment')->create(['post_id' => rand(1,10)]);
        }
    }
}
