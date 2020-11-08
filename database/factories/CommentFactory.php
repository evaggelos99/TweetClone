<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> $this -> faker -> numberBetween($min=1, $max=10),
            'post_id' => $this -> faker -> numberBetween($min=1, $max=50),
            'context' => $this -> faker -> realText($maxNbChars=50),
            'likes'=>$this->faker->numberBetween($min=1, $max=5),
        ];
    }
}
