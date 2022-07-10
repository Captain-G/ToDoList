<?php

use App\Http\Controllers\ToDoListController;
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

Route::get('/', [ToDoListController::class, 'index']);
Route::post('/saveItem',[ToDoListController::class, 'saveItem'])->name('saveItem');
Route::post('/isComplete/{id}', [ToDoListController::class, 'isComplete'])->name('isComplete');
