<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ViewController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [AdminController::class, 'dashboard'])->middleware([ 'verified', 'admin'])->name('dashboard');
// Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware([ 'verified', 'admin'])->name('dashboard');
// Route::get('/adminpost', [AdminController::class, 'create'])->middleware(['auth', 'verified', 'admin'])->name('adminpost');
// Route::post('/adminpost', [AdminController::class, 'store'])->middleware(['auth', 'verified', 'admin'])->name('addgame');




// Route::get('/store', [ViewController::class, 'show'])->middleware(['auth', 'verified'])->name('store');
// Route::get('/details/{gameid}', [ViewController::class, 'details'])->middleware(['auth', 'verified'])->name('details');
// Route::get('/details/{gameid}/buy', [ViewController::class, 'buy'])->middleware(['auth', 'verified'])->name('buy');
// Route::get('/library', [ViewController::class, 'library'])->middleware(['auth', 'verified'])->name('library');

// Rute untuk pengguna yang belum login
Route::get('/', [ViewController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [ViewController::class, 'index'])->name('dashboard');
Route::get('/store', [ViewController::class, 'show'])->name('store');
Route::get('/details/{gameid}', [ViewController::class, 'details'])->name('details');
Route::get('/about', [ViewController::class, 'info'])->name('about');
Route::get('/details/{gameid}/buy', [ViewController::class, 'buy'])->name('buy');


// Rute untuk pengguna yang telah login sebagai user
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/library', [ViewController::class, 'library'])->name('library');
});

// Rute untuk pengguna yang telah login sebagai admin
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admindashboard');
    Route::get('/adminpost', [AdminController::class, 'create'])->name('adminpost');
    Route::post('/adminpost', [AdminController::class, 'store'])->name('addgame');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';