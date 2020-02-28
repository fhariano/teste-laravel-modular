<?php

namespace Son\Blog\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Son\Blog\Entities\Post;

class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // $this->call("OthersTableSeeder");

        $post        = new Post();
        $post->title = 'HOME';
        $post->body  = 'HOME PAGE';
        $post->save();

        $post        = new Post();
        $post->title = 'About Us';
        $post->body  = 'ABOUT US';
        $post->save();

    }
}
