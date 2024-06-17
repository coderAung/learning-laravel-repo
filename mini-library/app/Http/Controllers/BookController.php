<?php

namespace App\Http\Controllers;

use App\Models\Book\Book;
use App\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function showAllBooks(Request $request) {
        if($request->get('keyword')){
            $keyword = $request->get('keyword');
            $type = $request->get('type');
            $books = BookService::findByKeyword($keyword, $type);            
        } else {
            $books = Book::paginate(8);
        }
        return view('books', ['books' => $books, 'resetUrl' => '/books']);
    }

    public function borrowBook() {
        return redirect('/books')->with('msg', 'Borrowing Book Procedure Successful');
    }
}
