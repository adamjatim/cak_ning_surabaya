<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Insert roles first
        DB::table('roles')->insert([
            ['name' => 'admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'cakning', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Insert users dengan role_id
        DB::table('users')->insert([
            [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'role_id' => DB::table('roles')->where('name', 'admin')->value('id'),
            'remember_token' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'name' => 'Admin Cak Ning',
            'email' => 'cakning@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'role_id' => DB::table('roles')->where('name', 'admin')->value('id'),
            'remember_token' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            // Tambahkan user lain sesuai kebutuhan
        ]);
    }
}
