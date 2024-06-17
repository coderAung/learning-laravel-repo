<?php
namespace App\Services;

use App\Models\BorrowDetail;
use Carbon\Carbon;

class BorrowDetailService {

    public static function findByKeyword($keyword, $type) {
        if ($type === 'book' || $type === 'member') {
            $history = BorrowDetail::whereRelation($type, 'name', 'like', "%$keyword%")->paginate(8);
        } elseif ($type === 'author') {
            $history = BorrowDetail::join('books', 'borrow_details.book_id', '=', 'books.id')
                        ->join('authors', 'books.author_id', '=', 'authors.id')
                        ->where('authors.name', 'like', "%$keyword%")
                        ->paginate(8);
        } elseif ($type === 'genre') {
            $history = BorrowDetail::join('books', 'borrow_details.book_id', '=', 'books.id')
                        ->join('genres', 'books.genre_id', '=', 'genres.id')
                        ->where('genres.name', 'like', "%$keyword")
                        ->paginate(8);
        }
        return $history;
    }

    public static function findUnreturndeBookByKeyword($keyword, $type) {
        if ($type === 'book' || $type === 'member') {
            $history = BorrowDetail::whereRelation($type, 'name', 'like', "%$keyword%")
                                        ->where('return_date', '>', Carbon::now())
                                        ->paginate(8);
        } elseif ($type === 'author') {
            $history = BorrowDetail::join('books', 'borrow_details.book_id', '=', 'books.id')
                        ->join('authors', 'books.author_id', '=', 'authors.id')
                        ->where('authors.name', 'like', "%$keyword%")
                        ->where('borrow_details.return_date', '>', Carbon::now())
                        ->paginate(8);
        } elseif ($type === 'genre') {
            $history = BorrowDetail::join('books', 'borrow_details.book_id', '=', 'books.id')
                        ->join('genres', 'books.genre_id', '=', 'genres.id')
                        ->where('genres.name', 'like', "%$keyword")
                        ->where('borrow_details.return_date', '>', Carbon::now())
                        ->paginate(8);
        }
        return $history;
        
    }

}
