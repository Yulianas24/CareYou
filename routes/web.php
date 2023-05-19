<?php

use App\Http\Controllers\AssessmentController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KonselorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UbahPasswordController;
use Chatify\Http\Controllers\MessagesController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardJadwalController;
use Clockwork\Support\Twig\ProfilerClockworkDumper;
use App\Http\Controllers\DashboardBookingController;
use App\Http\Controllers\DashboardProfileController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registrasi', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegisterController::class, 'store']);

Route::get('/registrasi-konselor', [RegisterController::class, 'indexKonselor'])->middleware('guest');
Route::post('/registrasi-konselor', [RegisterController::class, 'storeKonselor']);

Route::get('/dashboard', [DashboardBookingController::class, 'index'])->middleware('konselor');
Route::get('/dashboard/{item:id}/selesai', [DashboardBookingController::class, 'selesai'])->middleware('konselor');
Route::get('/dashboard/{item:id}/batal', [DashboardBookingController::class, 'batal'])->middleware('konselor');
Route::get('/result/{user:id}', [DashboardBookingController::class, 'result'])->middleware('konselor');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('konselor');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('konselor');

Route::resource('dashboard/profil', DashboardProfileController::class)->middleware('konselor');

Route::resource('dashboard/jadwal', DashboardJadwalController::class)->middleware('konselor');




Route::resource('/profile', ProfileController::class)->middleware('auth');
Route::resource('/ubahPassword', UbahPasswordController::class)->middleware('auth');


Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('pages.categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});


Route::get('/konselor', [KonselorController::class, 'index']);
Route::get('/konselor/{user:username}', [KonselorController::class, 'show']);
Route::post('/konselor/{user:username}/book', [KonselorController::class, 'booking'])->middleware('auth');

Route::get('/assessment', [AssessmentController::class, 'index']);
Route::post('/assessment', [AssessmentController::class, 'store']);

Route::get('/assessment/biodata', [AssessmentController::class, 'indexBio'])->middleware('auth');
Route::post('/assessment/biodata', [AssessmentController::class, 'storeBio'])->middleware('auth');
Route::get('/assessment/kategori', [AssessmentController::class, 'indexKategori'])->middleware('auth');
Route::post('/assessment/pss', [AssessmentController::class, 'storePss']);
Route::get('/assessment/pss', [AssessmentController::class, 'indexPss'])->middleware('auth');
Route::post('/assessment/kategori', [AssessmentController::class, 'storeKategori'])->middleware('auth');
Route::get('/assessment/result', [AssessmentController::class, 'indexResult'])->middleware('auth');
