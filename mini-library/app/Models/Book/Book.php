<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function author() {
        return $this->belongsTo('App\Models\Book\Author');
    }

    public function genre() {
        return $this->belongsTo('App\Models\Book\Genre');
    }
    public function publisher() {
        return $this->belongsTo('App\Models\Book\Publisher');
    }

    public function bookDetail() {
        return $this->hasOne('App\Models\Book\BookDetail');
    }
}
