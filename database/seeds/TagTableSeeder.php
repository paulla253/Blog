<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//       Tag::truncate(); -> NÃO PODE SER UTILIZADOS SE FOR FK

        factory('App\Tag',15)->create();
    }
}
