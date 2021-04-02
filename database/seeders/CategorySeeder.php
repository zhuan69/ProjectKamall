<?php

namespace Database\Seeders;

use App\Models\Category;
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
        Category::factory()->create();
        Category::factory()->create([
            'name' => 'Baju Pria',
        ]);
        Category::factory()->create([
            'name' => 'Baju Wanita',
        ]);
        Category::factory()->create([
            'name' => 'Buku'
        ]);
        Category::factory()->create([
            'name' => 'Handphone'
        ]);
    }
}
