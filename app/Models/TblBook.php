<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblBook extends Model
{
    protected $table = 'tbl_book';
    use HasFactory;

    protected $fillable = [
        'co_id', 'publisher_id', 'book_uniq_id', 'book_name', 'cover_photo', 'price', 'created_timetick'
        // Add other columns as needed
    ];

    public function contentOwner()
    {
        return $this->belongsTo(ContentOwner::class, 'co_id');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }
}
