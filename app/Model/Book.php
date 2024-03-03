<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'author',
        'name',
        'year_of_published',
        'price',
        'new_edition',
        'annotation'
    ];

}
