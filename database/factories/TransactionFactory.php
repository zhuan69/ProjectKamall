<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice'=>$this->faker->uuid,
            'shipping_cost'=>$this->faker->randomNumber(9),
            'courier'=>'JNE',
            'total'=>$this->faker->randomNumber(9),
            'users_id'=>1,
            'discount'=>25,
            'delivery_address'=>$this->faker->address,
        ];
    }
}
