<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateDummyPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = ['codechief.org', 'wordpress.org', 'laramust.com'];

        foreach ($posts as $key => $value) {
        	Post::create(['title'=>$value]);
        }
    }
}
