<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TaskController::class, 'index']);
Route::get('/add', [TaskController::class, 'add']);
Route::post('/store', [TaskController::class, 'store']);
Route::get('/edit/{id}', [TaskController::class, 'edit']);
Route::post('/update', [TaskController::class, 'update']);
Route::get('/delete/{id}', [TaskController::class, 'delete']);
