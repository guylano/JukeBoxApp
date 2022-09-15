<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\GenreController;
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
    return view('welcome');
});



Route::get('HEADERDONTTOUCHPLSTYNUB',function () {
    return view('jukebox.header')->name('jukebox.header');
});



Route::prefix('playlist')->group(function(){
    Route::get('/', [PlaylistController::class, 'index'])->middleware(['auth'])->name('playlist.index');
    Route::get('/show/{id}', [PlaylistController::class, 'show'])->middleware(['auth'])->name('playlist.show');

    
});

Route::prefix('song')->group(function(){
    Route::get('/', [SongController::class, 'index'])->middleware(['auth'])->name('song.index');
    Route::get('/show/{id}', [SongController::class, 'show'])->middleware(['auth'])->name('song.show');
    
});

Route::prefix('genre')->group(function(){
    Route::get('/', [GenreController::class, 'index'])->middleware(['auth'])->name('genre.index');
    Route::get('/show/{id}', [GenreController::class, 'show'])->middleware(['auth'])->name('genre.show');
    
});

//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


/*Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';
