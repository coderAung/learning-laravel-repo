<?php

namespace App\Http\Controllers;

use App\Models\Book\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function showAllAuthors() {
        $authors = Author::paginate(8);
        return view('author.authors', ['authors' => $authors]);
    }

    public function showProfile($id) {
        $author = Author::find($id);
        return view('author.profile', ['author' => $author]);
    }
}
