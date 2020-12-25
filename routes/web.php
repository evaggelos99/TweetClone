<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

//testing
//Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/tweet/create', [App\Http\Controllers\PostController::class, 'create'])->name('tweet.create');
Route::post('/tweet/', [App\Http\Controllers\PostController::class, 'store'])->name('tweet.store');
Route::get('/tweet/{id}', 'App\Http\Controllers\PostController@show') -> name('tweet.show');
Route::get('/tweet', 'App\Http\Controllers\PostController@index')->name('tweet.index');
Route::get('/tweet/{id}/edit', [App\Http\Controllers\PostController::class,'edit'])->name('tweet.edit');
Route::patch('/tweet/{id}', [PostController::class, 'update'])->name('tweet.update');
Route::delete('/tweet/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('tweet.destroy');

Route::get('/settings/{username}', [App\Http\Controllers\AccountController::class, 'edit'])->name('account.edit');
Route::patch('settings/{username}/update', [App\Http\Controllers\AccountController::class, 'update'])->name('account.update');
Route::delete('/settings/{username}', [App\Http\Controllers\AccountController::class, 'destroy'])->name('account.destroy');



Route::get('/account/{username}', [App\Http\Controllers\AccountController::class, 'index'])->name('account.show');
