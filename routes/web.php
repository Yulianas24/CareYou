<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('/pages/beranda', [
        "title" => "Home"
    ]);
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registrasi', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('konselor');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('konselor');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('konselor');


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Yulian",
        "email" => "yulianas1945@gmail.com"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);


Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts,
    ]);
});
