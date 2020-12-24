<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //random number that determines if the post will have a tag
        //tag requires controller to act as a pivot table
        //this is not included in the coursework part 1 but will be implemented in part 2
        $tags = array("gaming", "cars", "food", "fitness", "news");
        if (rand(0,3)==0) {
            $tagTitle = $tags[array_rand($tags,1)];
        } else $tagTitle=null;

        //$tagTitle = $tags[array_rand($tags,1)];

        return [
            /*'user_id' => $this -> faker -> numberBetween($min=1,$max=10), //Picking a random number from the user's id
            'title' => $this -> faker -> word,
            'tag' => $tagTitle,
            'likes' => $this->faker->numberBetween($min=1, $max=5),
            'content' => $this -> faker -> realText($maxNbChars = 50),
            'slug' => $this-> faker -> slug,*/
            'user_id'=>$this-> faker-> numberBetween(1,1),
            'title' => $this -> faker -> word,
            'likes' => $this->faker->numberBetween($min=1, $max=5),
            'content' => $this -> faker -> realText($maxNbChars = 50),
            'slug' => $this-> faker -> slug,
        ];
    }
}
