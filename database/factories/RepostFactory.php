<?php

namespace Database\Factories;

use App\Models\Repost;
use Illuminate\Database\Eloquent\Factories\Factory;

class RepostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Repost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this -> faker -> numberBetween($min=1, $max=10),
            'post_id' => $this -> faker -> numberBetween($min=1, $max=50),
            'slug' =>$this->faker->slug,
        ];
    }
}
