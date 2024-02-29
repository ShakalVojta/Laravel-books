<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Auth;

class HomepageController extends Controller
{
    public function index()
    {
        $crime_books = Book::where('category_id', 12)
            ->orderBy('publication_date', 'desc')
            ->with('authors')
            ->limit( \Gate::allows('owner'))
            ->get();

        return view('index.index', compact('crime_books'));
    }
}