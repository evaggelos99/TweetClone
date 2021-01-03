<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'biography' => $this -> faker -> text($maxNbChars = 5) ,
            'email' => $this -> faker -> address,
            'image' => $this ->faker -> imageUrl($width = 640, $height = 480),
        ];
    }
}
