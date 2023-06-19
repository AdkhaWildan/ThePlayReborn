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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified', 'admin'])->name('dashboard');
Route::get('/adminpost', [AdminController::class, 'create'])->middleware(['auth', 'verified', 'admin'])->name('adminpost');
Route::post('/adminpost', [AdminController::class, 'store'])->middleware(['auth', 'verified', 'admin'])->name('addgame');




Route::get('/store', [ViewController::class, 'show'])->middleware(['auth', 'verified'])->name('store');
Route::get('/details/{gameid}', [ViewController::class, 'details'])->middleware(['auth', 'verified'])->name('details');
Route::get('/details/{gameid}/buy', [ViewController::class, 'buy'])->middleware(['auth', 'verified'])->name('buy');
Route::get('/library', [ViewController::class, 'library'])->middleware(['auth', 'verified'])->name('library');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/store', function () {
//     return view('store');
// })->middleware(['auth', 'verified'])->name('store');

// Route::get('/details', function () {
//     return view('details');
// })->middleware(['auth', 'verified'])->name('details');


Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';