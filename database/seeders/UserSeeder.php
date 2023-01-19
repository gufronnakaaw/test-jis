<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'administrator',
                'role' => 'administrator',
                'password' => Hash::make(123),
            ],
            [
                'name' => 'user_hq',
                'role' => 'user_hq',
                'password' => Hash::make(456),
            ],
            [
                'name' => 'branch_user',
                'role' => 'branch_user',
                'password' => Hash::make(789),
            ],
        ]);
    }
}
