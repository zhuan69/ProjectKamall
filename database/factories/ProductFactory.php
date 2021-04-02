<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>'Xiaomi Genshin Impact',
            'description'=>$this->faker->text,
            'stock'=>$this->faker->randomDigit(),
            'price'=>$this->faker->randomNumber(9),
            'categories_id'=>1,
            'discount'=>25,
            'product_image'=>$this->faker->image(),
        ];
    }
}
