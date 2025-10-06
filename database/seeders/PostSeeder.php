<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
            'user_id' => 1,
            'title' => 'Wisata Religi Sunan Ampel',
            'slug' => 'wisata-religi-sunan-ampel',
            'content' => 'Kompleks makam Sunan Ampel menawarkan wisata religi sekaligus pembelajaran sejarah penyebaran Islam di Jawa Timur. Tempat ini menjadi tujuan ziarah dan wisata yang memadukan nilai spiritual dengan nilai edukatif.',
            'created_at' => now(),
            ],
            // ...tambahkan data post lain sesuai insert.sql...
        ]);
    }
}
