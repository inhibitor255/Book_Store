<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TblBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'id' => 5,
                'co_id' => 1,
                'publisher_id' => 1,
                'book_uniq_id' => 'BOK0005',
                'book_name' => 'အောင်ရဲ့အောင်',
                'cover_photo' => 'bok0005.png',
                'price' => 600,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 6,
                'co_id' => 1,
                'publisher_id' => 1,
                'book_uniq_id' => 'BOK0006',
                'book_name' => 'စစ်ကိုင်းသမီး ဒိုင်ယာရီ',
                'cover_photo' => 'bok0005.png',
                'price' => 800,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 7,
                'co_id' => 1,
                'publisher_id' => 1,
                'book_uniq_id' => 'BOK0007',
                'book_name' => 'ဝါဆိုဦးကပန်ဖူးတယ်',
                'cover_photo' => 'bok0005.png',
                'price' => 800,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 8,
                'co_id' => 2,
                'publisher_id' => 2,
                'book_uniq_id' => 'BOK0008',
                'book_name' => 'အမျိုးသားအားနည်းရောဂါနှင့် အခြားကျန်းမာရေးဆောင်းပါးများ',
                'cover_photo' => 'bok0005.png',
                'price' => 600,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 9,
                'co_id' => 3,
                'publisher_id' => 3,
                'book_uniq_id' => 'BOK0009',
                'book_name' => 'နောက်ကြည့်မှန်',
                'cover_photo' => 'bok0005.png',
                'price' => 1200,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 10,
                'co_id' => 4,
                'publisher_id' => 4,
                'book_uniq_id' => 'BOK0010',
                'book_name' => 'ခံတက်နူလေးတွေညှိးချိန်တန်တော့',
                'cover_photo' => 'bok0005.png',
                'price' => 0,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 11,
                'co_id' => 4,
                'publisher_id' => 4,
                'book_uniq_id' => 'BOK0011',
                'book_name' => 'သုံးလွန်းတင်မှကြိုး',
                'cover_photo' => 'bok0005.png',
                'price' => 0,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 12,
                'co_id' => 4,
                'publisher_id' => 4,
                'book_uniq_id' => 'BOK0012',
                'book_name' => 'ပွင့်တချို့ ကြွေတချို့ ',
                'cover_photo' => 'bok0005.png',
                'price' => 0,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 13,
                'co_id' => 5,
                'publisher_id' => 5,
                'book_uniq_id' => 'BOK0013',
                'book_name' => 'ကျွန်တော်နှင့် ကျွန်တော့်အင်္လကာ',
                'cover_photo' => 'bok0005.png',
                'price' => 600,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 14,
                'co_id' => 5,
                'publisher_id' => 5,
                'book_uniq_id' => 'BOK0014',
                'book_name' => 'ကျွန်တော်နှင့် ကျွန်တော့်ပတ်ဝန်းကျင်',
                'cover_photo' => 'bok0005.png',
                'price' => 600,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
        ];

        DB::table('tbl_book')->insert($books);
    }
}
