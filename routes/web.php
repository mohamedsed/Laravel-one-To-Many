<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationsController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('user' ,[ RelationsController::class , 'getUser'])->name('all.user');
Route::get('all-area' ,[ RelationsController::class , 'showArea']);

Route::get('user-area/{user_id}' ,[ RelationsController::class , 'getArea'])->name('user.area');
Route::get('delete-user/{user_id}' ,[ RelationsController::class , 'deleteUser'])->name('user.delete');
