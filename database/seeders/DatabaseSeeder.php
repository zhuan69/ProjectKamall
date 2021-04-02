<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run():void{
        $this->call([
            CategorySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            UserCartSeeder::class,
            TransactionSeeder::class,
            TransactionDetailSeeder::class
        ]);
    }
}
