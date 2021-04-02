<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminId = DB::table('roles')
            ->where('name', 'Admin')
            ->pluck('id')->toArray();
        $memberId = DB::table('roles')
            ->where('name', 'Member')
            ->pluck('id')->toArray();

        for ($i = 1; $i <= 2; $i++) {
            User::factory()->create([
                'username' => "admin".$i,
                'password' => bcrypt('password'),
                'roles_id' => $adminId[0]
            ]);
            User::factory()->create([
                'username' => "member".$i,
                'password' => bcrypt('password'),
                'roles_id' => $memberId[0]
            ]);
        }
    }
}
