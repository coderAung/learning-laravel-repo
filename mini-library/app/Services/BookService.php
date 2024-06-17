<?php
namespace App\Services;

use App\Models\Book\Book;

class BookService {

    public static function findByKeyword($keyword, $type) {

        if ($type === 'book') {
            $books = Book::where('name', 'like','%'. $keyword .'%')->paginate(5);
        } elseif ($type === 'author' || $type === 'publisher' || $type === 'genre') {
            $books = Book::whereRelation($type, 'name', 'like', '%'. $keyword .'%')->paginate(5);
        }

        return $books;
    }
}