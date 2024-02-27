<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    public function index () {

        $user = Auth::user();
        $crime_books = Book::where('category_id', 12)
            ->orderBy('publication_date', 'desc')
            ->limit(10)
            ->get();

        return view('index.index', compact('crime_books'));
    }
    
}
