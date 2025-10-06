<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run()
    {
        DB::table('tags')->insert([
            ['name_tags' => 'Sejarah Kota Surabaya'],
            ['name_tags' => 'Cak Ning Surabaya'],
            ['name_tags' => 'Wisata Kuliner Surabaya'],
            ['name_tags' => 'Tempat Wisata di Surabaya'],
            ['name_tags' => 'Budaya dan Tradisi Surabaya'],
            ['name_tags' => 'Transportasi di Surabaya'],
            ['name_tags' => 'Pendidikan di Surabaya'],
            ['name_tags' => 'Ekonomi dan Bisnis Surabaya'],
            ['name_tags' => 'Acara dan Festival di Surabaya'],
            ['name_tags' => 'Berita Terkini Surabaya'],
            ['name_tags' => 'Kuliner Khas Surabaya'],
            // ...tambahkan data tag lain sesuai insert.sql...
        ]);
    }
}
