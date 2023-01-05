<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::resource('books', BooksController::class);   
Route::resource('authors', AuthorsController::class);
Route::resource('categories', CategoriesController::class);


Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {

    if (isset($item)) {
        return 'Store: ' . $category . " " . $item;
    }

    if (isset($category)) {
        return 'Store: ' . $category;
    }

    return 'All store';
    
});