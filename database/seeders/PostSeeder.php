<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Factories\RepostFactory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory() ->times(150) -> create();
        //RepostFactory::class -> times(10) -> create();
    }
}
