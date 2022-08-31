<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\FilmController;
Route::resource('films', FilmController::class);

Route::delete('films/force/{film}', [FilmController::class, 'forceDestroy'])->name('films.force.destroy');
Route::put('films/restore/{film}', [FilmController::class, 'restore'])->name('films.restore');
