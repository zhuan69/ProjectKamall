<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name' => 'Bouquet',
        ]);
        Category::factory()->create([
            'name' => 'Hampers',
        ]);
        Category::factory()->create([
            'name' => 'Rent Box',
        ]);
        Category::factory()->create([
            'name' => 'Decoration',
        ]);
    }
}
