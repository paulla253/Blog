<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Apagar todos os registros da tabela*/
        Post::truncate();

        factory('App\Post',15)->create();


    }
}
