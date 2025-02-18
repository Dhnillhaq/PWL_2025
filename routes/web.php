<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['name' => 'Cihuyy']);
});


Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get("/articles/{id}", [ArticleController::class, 'index']);

Route::get('/user/{name?}', function ($name = "John") {
    return 'Nama saya ' . $name;
});


Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});



Route::get('/user/profile', function () {
    //
})->name('profile');

// Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::resource('photos', PhotoController::class);

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Dhanil']);
// });

Route::get("/greeting", [WelcomeController::class, 'greeting']);