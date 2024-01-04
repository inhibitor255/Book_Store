<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContentOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'ခင်ဆွေဦး'],
            ['name' => 'တိုးထက္'],
            ['name' => 'မင်းကိုနိုင်'],
            ['name' => 'မိုးမိုး (အင်းလျား)'],
            ['name' => ' နိုင်ဇော် (Lazy Club)'],
            ['name' => 'Synergy Publishing'],
            ['name' => 'သန္း၀င္းလိႈင္'],
            ['name' => 'ရာျပည့္'],
            ['name' => 'ချစ်ဦးညို'],
            ['name' => 'အကြည်တော်'],
        ];

        DB::table('content_owners')->insert($data);
    }
}
