<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publishers = [
            ['id' => 1, 'name' => 'ခင္ေဆြဦး'],
            ['id' => 2, 'name' => 'ဆင်ဖြူကျွန်း ကျော်လှိုင်ဦး'],
            ['id' => 3, 'name' => 'မင်းကိုနိုင်'],
            ['id' => 4, 'name' => 'မိုးမိုး (အင်းလျား)'],
            ['id' => 5, 'name' => 'နိုင်ဇော် (Lazy Club)'],
            ['id' => 6, 'name' => 'နိုင်းနိုင်းစနေ'],
            ['id' => 7, 'name' => 'သန်းဝင်းလှိုင်'],
            ['id' => 8, 'name' => 'ရာပြည့်ဦးစိုးညွန့်'],
            ['id' => 9, 'name' => 'ချစ်ဦးညို'],
            ['id' => 10, 'name' => 'အကြည်တော်'],
        ];

        DB::table('publishers')->insert($publishers);
    }
}
