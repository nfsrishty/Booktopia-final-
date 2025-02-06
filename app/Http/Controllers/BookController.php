<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'author' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('book_images', 'public'); // Store in storage/app/public/book_images
    } else {
        $imagePath = null;
    }

    // Save book in database
    Book::create([
        'title' => $request->title,
        'author' => $request->author,
        'description' => $request->description,
        'image' => $imagePath, // Save path in DB
    ]);

    return redirect()->route('books.index')->with('success', 'Book added successfully!');
}


}

