<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => 'Apa itu Cak dan Ning Surabaya?',
                'answer' => 'Cak dan Ning Surabaya adalah duta pariwisata dan budaya kota Surabaya yang dipilih melalui kompetisi tahunan untuk mempromosikan kota Surabaya.',
                'tag_id' => 1,
            ],
            // ...tambahkan data FAQ lain sesuai insert.sql...
        ]);
    }
}
