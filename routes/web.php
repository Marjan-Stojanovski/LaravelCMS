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

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Route::middleware(['web','auth'])->prefix('dashboard')->group(function() {

    //Users-web-route

    Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

    //Categories-web-route

    Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');
    Route::get('categories/{category}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
});
