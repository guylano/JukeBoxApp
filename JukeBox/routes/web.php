<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

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


Route::prefix('music')->group(function(){
    Route::get('/', [MusicController::class, 'index']);

    
});



