<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\UserCart;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $user = DB::table('users')->where('username', 'member1')->first();
        foreach ($products as $product) {
            UserCart::factory()->create([
                'users_id' => $user->id,
                'products_id' => $product->id
            ]);
        }
    }
}
