<?php
use App\Http\Controllers\UseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index'])->name('books.index');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//     return view('welcome');
// });
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/', function () { //base directory:localhost/.....
    $name = 'Srishty'; // Retrieves the 'id' query parameter
    return view('home',['name' => $name]);
});

// Route::get('/',[UseController::class,'use']); //home page er

// Route::post('/user',[UseController::class,'AddUsers']);

Route::get('contact/', function () { //base directory:localhost/.....
    return view('contact');
});

Route::get('about/', function () { //base directory:localhost/.....
    return view('about');
});

Route::get('qna/', function () { //base directory:localhost/.....
    return view('qna');
});

Route::get('addBook/', function () { //base directory:localhost/.....
    return view('addBook');
});

Route::post('showbook/', function () { //base directory:localhost/.....
    $book_name = request('book_name');
    $author_name = request('author_name');
    return view('showbook',['my_book_name'=> $book_name]);
});

// Route::get('temp', function () {
//     $temp = request('id'); // Retrieves the 'id' query parameter
//     return view('temp', ['id' => $temp]); // Passes it to the view
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
