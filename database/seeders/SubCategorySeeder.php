<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boquet = DB::table('categories')->where('name', 'Bouquet')->first();
        SubCategory::factory()->create([
            'sub_name' => 'Flower',
            'categories_id'=>$boquet->id
        ]);
        SubCategory::factory()->create([
            'sub_name' => 'Snacks',
            'categories_id'=>$boquet->id
        ]);
        SubCategory::factory()->create([
            'sub_name' => 'Skincare',
            'categories_id'=>$boquet->id
        ]);
        SubCategory::factory()->create([
            'sub_name' => 'Make up',
            'categories_id'=>$boquet->id
        ]);
        SubCategory::factory()->create([
            'sub_name' => 'Money',
            'categories_id'=>$boquet->id
        ]);
        SubCategory::factory()->create([
            'sub_name' => 'Boneka',
            'categories_id'=>$boquet->id
        ]);
        SubCategory::factory()->create([
            'sub_name' => 'Custom',
            'categories_id'=>$boquet->id
        ]);
        $hampers = DB::table('categories')->where('name', 'Hampers')->first();
        SubCategory::factory()->create([
            'sub_name' => 'Paket wedding',
            'categories_id'=>$hampers->id
        ]);
        SubCategory::factory()->create([
            'sub_name' => 'Paket kesehatan',
            'categories_id'=>$hampers->id
        ]);
        SubCategory::factory()->create([
            'sub_name' => 'Other',
            'categories_id'=>$hampers->id
        ]);
        $rentBox = DB::table('categories')->where('name', 'Rent Box')->first();
        SubCategory::factory()->create([
            'sub_name' => 'Box kaca',
            'categories_id'=>$rentBox->id
        ]);
        SubCategory::factory()->create([
            'sub_name' => 'Other',
            'categories_id'=>$rentBox->id
        ]);
        $decoration = DB::table('categories')->where('name', 'Decoration')->first();
        SubCategory::factory()->create([
            'sub_name' => 'Lamaran',
            'categories_id'=>$decoration->id
        ]);
        SubCategory::factory()->create([
            'sub_name' => 'Tunangan',
            'categories_id'=>$decoration->id
        ]);
        SubCategory::factory()->create([
            'sub_name' => 'Wedding',
            'categories_id'=>$decoration->id
        ]);
    }
}
