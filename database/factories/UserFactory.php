<?php

namespace Database\Factories;

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
        return [
            'username'=>$this->faker->userName,
            'password'=>bcrypt($this->faker->password),
            'name'=>$this->faker->name,
            'email'=>$this->faker->email,
            'phone_number'=>$this->faker->phoneNumber,
            'roles_id'=>1,
            'last_login'=>$this->faker->date(),
            'address'=>$this->faker->address
        ];
    }
}
