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

        $comment = new Comment();
        $comment->context = $this->faker->text(20);
        $comment->likes=0;
        $comment->user_id = $this-> faker -> numberBetween(1,10);
        $comment->post_id = $this -> faker ->numberBetween(1,150);
        $comment->save();
        return [
            /*'user_id'=> $this -> faker -> numberBetween($min=1, $max=10),
            'post_id' => $this -> faker -> numberBetween($min=1, $max=150),
            'context' => $this -> faker -> text($maxNbChars=10),
            'likes'=>0,*/
        ];
    }
}
