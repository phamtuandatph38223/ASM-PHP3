<?php

use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/index', function () {
    return view('client.index');
});
Route::get('/shop', function () {
    return view('client.shop');
});
Route::get('/about', function () {
    return view('client.about');
});
Route::get('/post', function () {
    return view('client.post');
});
Route::get('/postdetail', function () {
    return view('client.postdetail');
});

// ======================POST======================
Route::get('/post', [PostController::class, 'showAll'])->name('post');
Route::get('/postdetail/{id}', [PostController::class, 'detail'])->name('detail');
Route::get('/search', [PostController::class, 'search'])->name('search');



// ================LOGIN==================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
