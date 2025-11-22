<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //Field tabel book
    protected $fillable = [
        'title',
        'cover',
        'category_id',
        'author',
        'synopsis'
    ];

    public function category()
    {
        return $this->belongsTo(BookCategory::class, 'category_id');
    }
}
