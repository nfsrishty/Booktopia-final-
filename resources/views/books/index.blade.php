@extends('layout')

@section('title', 'Books')

@section('content')
<div class="container">
    <h1 class="mb-4">Available Books</h1>
    <div class="row">
        @if($books->count() > 0)
                @foreach ($books as $book)
            <div class="book">
                <h2>{{ $book->title }}</h2>
                <p><strong>Author:</strong> {{ $book->author }}</p>
                <p>{{ $book->description }}</p>

                @if ($book->image)
                    <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" width="150">
                @else
                    <p>No image available</p>
                @endif
            </div>
        @endforeach

        @else
            <p>No books available.</p>
        @endif
    </div>
</div>
@endsection
