<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $transactions = Transaction::all();
        $products = Product::all();
        foreach ($transactions as $transaction){
            foreach ($products as $product){
                TransactionDetail::factory()->create([
                    'transactions_id' => $transaction->id,
                    'products_id'=>$product->id
                ]);
            }
        }
    }
}
