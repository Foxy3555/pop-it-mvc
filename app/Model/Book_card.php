<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_card extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id_book',
        'library_card_number',
        'id_user',
        'date_book_taking',
        'period_book_taking'
    ];

}
