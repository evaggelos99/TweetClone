<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\RepostController;
use App\Http\Controllers\TagController;
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
    if (Auth::user()) {
        return redirect('account/'. Auth::user()->id);
    } else {
        return view('welcome');
    }
});




Auth::routes();

//testing
//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('follow/{username}', [FollowsController::class, 'store'])->name('follower.store');


Route::get('/tweet/create', [App\Http\Controllers\PostController::class, 'create'])->name('tweet.create');
Route::post('/tweet/', [App\Http\Controllers\PostController::class, 'store'])->name('tweet.store');
Route::get('/tweet/{id}',[App\Http\Controllers\PostController::class, 'show']) -> name('tweet.show');
Route::get('/tweet',[App\Http\Controllers\PostController::class, 'index'])->name('tweet.index');
Route::get('/tweet/{id}/edit', [App\Http\Controllers\PostController::class,'edit'])->name('tweet.edit');
Route::patch('/tweet/{id}', [PostController::class, 'update'])->name('tweet.update');
Route::delete('/tweet/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('tweet.destroy');

Route::get('/settings/{username}', [App\Http\Controllers\AccountController::class, 'edit'])->name('account.edit');
Route::patch('settings/{username}/update', [App\Http\Controllers\AccountController::class, 'update'])->name('account.update');
Route::delete('/settings/{username}', [App\Http\Controllers\AccountController::class, 'destroy'])->name('account.destroy');
Route::get('/account/{username}', [App\Http\Controllers\AccountController::class, 'show'])->name('account.show');
Route::get('/account', function (){
    if (Auth::user()) {
        return redirect('account/'. Auth::user()->id);
    } else {
        return redirect('/login');
    }
});

Route::get('/tag/{tag}', [TagController::class, 'index']) ->name('tag.index');
Route::post('/tweet/save-comment', [CommentsController::class, 'save_comment'])->name('save_comment');
Route::delete('/tweet/delete-comment/{id}', [CommentsController::class, 'delete_comment'])->name('delete_comment');
Route::get('/tweet/edit-comment/{id}', [CommentsController::class, 'edit'])->name('comment.edit');
Route::patch('/tweet/comment/{id}', [CommentsController::class, 'update'])->name('comment.update');
//Route::patch('/tweet/edit/{id}', [CommentsController::class, 'edit_comment'])->name('edit_comment');
Route::post('/repost/{id}', [RepostController::class, 'store'])->name('repost.store');
