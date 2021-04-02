<?php

namespace Database\Factories;

use App\Models\UserCart;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserCart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id'=>2,
            'products_id'=>1,
            'qty'=>$this->faker->randomDigit(),
            'totalPrice'=>$this->faker->randomNumber(9)
        ];
    }
}
