<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagSeeder extends Seeder
{
    public function run()
    {
        DB::table('post_tags')->insert([
            ['post_id' => 1, 'tag_id' => 1],
            ['post_id' => 1, 'tag_id' => 2],
            // ...tambahkan relasi lain sesuai insert.sql...
        ]);
    }
}
