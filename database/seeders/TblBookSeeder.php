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
                'cover_photo' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1559969222i/46207368.jpg',
                'price' => 600,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 6,
                'co_id' => 1,
                'publisher_id' => 1,
                'book_uniq_id' => 'BOK0006',
                'book_name' => 'စစ်ကိုင်းသမီး ဒိုင်ယာရီ',
                'cover_photo' => 'https://online.pubhtml5.com/shlu/rerg/files/large/1.jpg?1668760755',
                'price' => 800,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 7,
                'co_id' => 1,
                'publisher_id' => 1,
                'book_uniq_id' => 'BOK0007',
                'book_name' => 'ဝါဆိုဦးကပန်ဖူးတယ်',
                'cover_photo' => 'https://towergateway.files.wordpress.com/2012/11/k15.jpg',
                'price' => 800,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 8,
                'co_id' => 2,
                'publisher_id' => 2,
                'book_uniq_id' => 'BOK0008',
                'book_name' => 'အမျိုးသားအားနည်းရောဂါနှင့် အခြားကျန်းမာရေးဆောင်းပါးများ',
                'cover_photo' => 'https://s3.bitmyanmar.info/wunzin/assets/book/cover/weak.jpg',
                'price' => 600,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 9,
                'co_id' => 3,
                'publisher_id' => 3,
                'book_uniq_id' => 'BOK0009',
                'book_name' => 'နောက်ကြည့်မှန်',
                'cover_photo' => 'https://imgv2-1-f.scribdassets.com/img/document/349629571/298x396/768643c552/1496476127?v=1',
                'price' => 1200,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 10,
                'co_id' => 4,
                'publisher_id' => 4,
                'book_uniq_id' => 'BOK0010',
                'book_name' => 'ခံတက်နူလေးတွေညှိးချိန်တန်တော့',
                'cover_photo' => 'https://s3.bitmyanmar.info/wunzin/assets/book/cover/katanu_1.jpg',
                'price' => 0,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 11,
                'co_id' => 4,
                'publisher_id' => 4,
                'book_uniq_id' => 'BOK0011',
                'book_name' => 'သုံးလွန်းတင်မှကြိုး',
                'cover_photo' => 'https://sarpaylawka.com/storage/1-back-photos/ad1d6b625f5c6f43e13c6bb6dcc2a6719c4411b6.png',
                'price' => 0,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 12,
                'co_id' => 4,
                'publisher_id' => 4,
                'book_uniq_id' => 'BOK0012',
                'book_name' => 'ပွင့်တချို့ ကြွေတချို့ ',
                'cover_photo' => 'https://booklandmm.com/assets/uploads/cover_img/SPLK-042.jpg',
                'price' => 0,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 13,
                'co_id' => 5,
                'publisher_id' => 5,
                'book_uniq_id' => 'BOK0013',
                'book_name' => 'ကျွန်တော်နှင့် ကျွန်တော့်အင်္လကာ',
                'cover_photo' => 'https://s3.bitmyanmar.info/wunzin/assets/book/cover/alinker.jpg',
                'price' => 600,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
            [
                'id' => 14,
                'co_id' => 5,
                'publisher_id' => 5,
                'book_uniq_id' => 'BOK0014',
                'book_name' => 'ကျွန်တော်နှင့် ကျွန်တော့်ပတ်ဝန်းကျင်',
                'cover_photo' => 'https://s3.bitmyanmar.info/wunzin/assets/book/cover/environment.jpg',
                'price' => 600,
                'created_timetick' => '2014-03-01 00:00:00',
            ],
        ];

        DB::table('tbl_book')->insert($books);
    }
}
