<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $tags = array("gaming", "cars", "food", "fitness", "news");
        if (rand(0,2)==0) {
            $tagTitle = $tags[array_rand($tags,1)];
        } else { $tagTitle=null; }

        return [
            'user_id' => $this -> faker -> numberBetween($min=1,$max=10), //Picking a random number from the user's id
            'title' => $this -> faker -> word,
            'tag' => $tagTitle,
            'likes' => $this->faker->numberBetween($min=1, $max=5),
            'content' => $this -> faker -> realText($maxNbChars = 50),
            'slug' => $this-> faker -> slug,
        ];
    }
}
