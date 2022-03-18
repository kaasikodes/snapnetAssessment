<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CitizensController;
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

Route::get('/books', [BooksController::class, 'index'])->name('books.index');
Route::post('/books', [BooksController::class, 'store'])->name('books.store');


Route::get('/citizens/state/{state}', [CitizensController::class, 'listOfCitizensInAState'])->name('citizens.state');
Route::get('/citizens/lga/{lga}', [CitizensController::class, 'listOfCitizensInALGA'])->name('citizens.lga');
Route::get('/citizens/ward/{ward}', [CitizensController::class, 'listOfCitizensInAWard'])->name('citizens.ward');
Route::resource('citizens', CitizensController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
