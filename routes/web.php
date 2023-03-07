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

    //Products-web-route

    Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('products/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
    Route::post('products', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::get('products/{product}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
    Route::get('products/{product}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::put('products/{product}', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    Route::delete('products/{product}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');

    //Settings-web-route

    Route::get('settings', [\App\Http\Controllers\SettingsControler::class, 'index'])->name('settings.index');
    Route::get('settings/create', [\App\Http\Controllers\SettingsControler::class, 'create'])->name('settings.create');
    Route::post('settings', [\App\Http\Controllers\SettingsControler::class, 'store'])->name('settings.store');
    Route::get('settings/{settings}/edit', [\App\Http\Controllers\SettingsControler::class, 'edit'])->name('settings.edit');
    Route::put('settings/{settings}', [\App\Http\Controllers\SettingsControler::class, 'update'])->name('settings.update');
});
