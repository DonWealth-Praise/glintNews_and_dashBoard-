<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
    return view('index');
});

Route::get('/portal', function () {
    return view('home');
});

Route::GET('login', [LoginController::class, 'showLoginForm'])->name('login');

// Route::get('logout', [LoginController::class, 'showLoginForm'])->name('login');


// Auth::routes();

Route::namespace('Admin')->prefix('admin')->as('admin.')->middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/news', 'NewsController');
});
