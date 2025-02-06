<form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" required><br>

    <label for="author">Author:</label>
    <input type="text" name="author" required><br>

    <label for="description">Description:</label>
    <textarea name="description" required></textarea><br>

    <label for="image">Book Cover:</label>
    <input type="file" name="image" accept="image/*" required><br>

    <button type="submit">Add Book</button>
</form>
