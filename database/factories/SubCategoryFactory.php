<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sub_name' => 'Kemeja Pria',
            'sub_description' => $this->faker->text,
            'categories_id'=>1
        ];
    }
}
