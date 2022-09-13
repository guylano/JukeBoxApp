<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;

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


//standaard voorbeeld 
/*Route::get('/users/{user}', [UserController::class, 'show'])*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('HEADERDONTTOUCHPLSTYNUB',function () {
    return view('jukebox.header')->name('jukebox.header');
});


Route::prefix('playlist')->group(function(){
    Route::get('/', [PlaylistController::class, 'index'])->name('playlist.index');
    Route::get('/show/{id}', [PlaylistController::class, 'show'])->name('playlist.show');

    
});

Route::prefix('song')->group(function(){
    Route::get('/', [SongController::class, 'index'])->name('song.index');
    Route::get('/show/{id}', [SongController::class, 'show'])->name('song.show');
    
});



