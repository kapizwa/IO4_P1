<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ZamowieniaController;
use App\Http\Controllers\BookListController;

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

Route::middleware(['auth'])->group(function() {
    Route::middleware(['can:isAdmin'])->group(function() {
        /* ADMIN */
        Route::get('/order_edit', [App\Http\Controllers\ZamowieniaController::class, 'index_edit']);
        Route::get('/user_show', [App\Http\Controllers\UserController::class, 'show']);
        Route::get('deleteuser/{id}', [App\Http\Controllers\UserController::class, 'delete']);

        

        

});
    /* ZALOGOWANI */
    Route::get('/users_list', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('/order_list', [App\Http\Controllers\ZamowieniaController::class, 'index_list']);
    

    
    //----Książka----// 
    Route::get('/book_list', [App\Http\Controllers\BookListController::class, 'index']);
    Route::get('/book_list_create', [App\Http\Controllers\BookListController::class, 'create']);
    Route::post('/book_list_create', [App\Http\Controllers\BookListController::class, 'store']);
    Route::get('/searchbook',[App\Http\Controllers\BookListController::class, 'search']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
