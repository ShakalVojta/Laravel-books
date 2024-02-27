<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function latest()
    {
        $books = Book::orderBy('publication_date', 'desc')
            ->limit(10)
            ->get();

        return $books;
    }
}
