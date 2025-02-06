    @extends('layout')
    @section('title','Add Book')
    @section('content')

    <h3>Add book to cart</h3>
    <form method="post" action="{{ url('/showbook') }}">
        @csrf
        <input type="text" name="book_name" placeholder="Book Name" required>
        <input type="text" name="author_name" placeholder="Author Name" required>
        <button type="submit">Add Book</button>
    </form>
    @endsection