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

Route::get('/', function ()
 {
    return view('welcome');
})->name('welcome.index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* Route::get('/board/show', [App\Http\Controllers\CardController::class, 'show'])->name('card.show'); */
//Board route
Route::get('/board', [App\Http\Controllers\BoardController::class, 'index'])->name('board.index');
Route::get('/board/show/{id}', [App\Http\Controllers\BoardController::class, 'show'])->name('board.show');

Route::post('/board/create', [App\Http\Controllers\BoardController::class, 'store'])->name('board.store');
Route::get('/board/edit/{id}', [App\Http\Controllers\BoardController::class, 'edit'])->name('board.edit');
Route::put('/board/update/{id}', [App\Http\Controllers\BoardController::class, 'update'])->name('board.update');
Route::delete('/board/delete/{id}', [App\Http\Controllers\BoardController::class, 'delete'])->name('board.delete');

//route for card
Route::get('/board/card', [App\Http\Controllers\CardController::class, 'index'])->name('card.index');
Route::post('/board/card/create', [App\Http\Controllers\CardController::class, 'store'])->name('card.store');
Route::delete('/board/card/delete/{id}', [App\Http\Controllers\CardController::class, 'delete'])->name('card.delete');
Route::put('/board/card/update/{id}', [App\Http\Controllers\CardController::class, 'update'])->name('card.update');
Route::get('/board/card/edit/{id}', [App\Http\Controllers\CardController::class, 'edit'])->name('card.edit');


// route for task
Route::get('/board/card/task', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');

Route::post('/board/card/task/create', [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');
Route::delete('/board/card/task/delete{id}', [App\Http\Controllers\TaskController::class, 'delete'])->name('tasks.delete');
Route::get('/board/card/task/edit{id}', [App\Http\Controllers\TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/board/card/task/update{id}', [App\Http\Controllers\TaskController::class, 'update'])->name('tasks.update');


// Route for Comments----------------------------------------------------------------------------------
Route::get('/board/card/task/comment', [App\Http\Controllers\CommentController::class, 'index'])->name('comments.index');
Route::post('/board/card/task/comment/create', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
Route::get('/board/card/task/comment/edit/{id}', [App\Http\Controllers\CommentController::class, 'edit'])->name('comments.edit');
Route::put('/board/card/task/comment/update/{id}', [App\Http\Controllers\CommentController::class, 'update'])->name('comments.update');
Route::delete('/board/card/task/comment/delete/{id}', [App\Http\Controllers\CommentController::class, 'delete'])->name('comments.delete');


//route for Profil
Route::get('/board/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil.index');
Route::post('/board/profil/create', [App\Http\Controllers\ProfilController::class, 'store'])->name('profil.store');
Route::delete('/board/profil/delete/{id}', [App\Http\Controllers\ProfilController::class, 'delete'])->name('profil.delete');
Route::put('/board/profil/update/{id}', [App\Http\Controllers\ProfilController::class, 'update'])->name('profil.update');
Route::get('/board/profil/edit/{id}', [App\Http\Controllers\ProfilController::class, 'edit'])->name('profil.edit');
