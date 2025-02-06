<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    use App\Models\Book;

public function run()
{
    Book::create([
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'description' => 'A classic novel set in the 1920s.',
        'cover_image' => 'great-gatsby.jpg',
    ]);

    Book::create([
        'title' => '1984',
        'author' => 'George Orwell',
        'description' => 'A dystopian novel about surveillance and control.',
        'cover_image' => '1984.jpg',
    ]);
}

}
