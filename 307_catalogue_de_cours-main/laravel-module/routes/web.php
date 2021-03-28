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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/site', [App\Http\Controllers\siteController::class, 'index'])->name('site');
Route::get('/promos', [App\Http\Controllers\promosController::class, 'index'])->name('promos');
Route::get('/section', [App\Http\Controllers\sectionController::class, 'index'])->name('section');
Route::get('/semestre', [App\Http\Controllers\semestreController::class, 'index'])->name('semestre');
Route::get('/majeure', [App\Http\Controllers\majeureController::class, 'index'])->name('majeure');
