<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ToDoListController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [ToDoListController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/saveItem',[ToDoListController::class, 'saveItem'])->name('saveItem');
Route::post('/isComplete/{id}', [ToDoListController::class, 'isComplete'])->name('isComplete');
Route::post('/status/{id}', [ToDoListController::class, 'status'])->name('status');
Route::post('/delete/{id}', [ToDoListController::class, 'delete'])->name('delete');
Route::post('/edit/{id}', [ToDoListController::class, 'edit'])->name('edit');
