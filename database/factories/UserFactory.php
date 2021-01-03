<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = new User();
        $account = new Account();
        $user->username = $this -> faker -> userName;
        $user->email =  $this -> faker -> safeEmail;
        $user->name = ($this->faker->firstName) . ($this->faker->lastName);
        $user->password = $this -> faker -> password;
        $user->save();
        $account -> user_id = $user->id;
        $account-> biography = $this -> faker -> text(5);
        $account->location = $this -> faker -> address;
        $image = $this -> faker-> image(storage_path('app/public/uploads'),$width = 640, $height = 480, null, false);
        $account->image='/uploads/' . $image;
        $account->save();
        return [
            /*'username' => $this -> faker -> userName,
            'email' => $this -> faker -> safeEmail,
            'name' => ($this->faker->firstName) . ($this->faker->lastName),
            'password' => $this -> faker -> password,*/
        ];
    }
}
