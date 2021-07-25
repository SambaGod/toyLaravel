<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\TodoController;
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

Route::get('/', [HomePageController::class, 'index']);
Route::get('/todos', [TodoController::class, 'index'])->name('todos');
Route::post('/add-todo', [TodoController::class, 'store']);
Route::get('/todo/{todo}', [TodoController::class, 'show']);
Route::delete('/delete-todo/{todo}', [TodoController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
