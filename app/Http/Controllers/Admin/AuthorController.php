<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthorController extends Controller
{
    public function index () {
        $authors = Author::limit(10)->get();
        return view('admin.authors.index', compact('authors'));
    }

    public function create () {
        return view('admin.authors.create');
    }

    public function store(Request $request) {
        $validated_data = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'required|string',
        ]);

        $slug = Str::slug($validated_data['name']);

    $authorData = array_merge($validated_data, ['slug' => $slug]);
    $author = Author::create($authorData);

    return redirect('/admin/authors')->with('success', 'Author created successfully');

    }
}
