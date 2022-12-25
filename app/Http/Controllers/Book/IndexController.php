<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;

class IndexController extends Controller
{

    public function __invoke()
    {
        $books = Book::all();

        return $books;
    }
}
