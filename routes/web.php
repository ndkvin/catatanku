<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', [Controllers\HomeController::class, 'index'])
  ->name('home');
Route::get('/detail/{id?}', function() {
  return view('pages.detail');
})->name('detail');
Route::get('/dashboard', function() {
  return view('pages.dashbaord');
})->name('dashboard');

Route::prefix('admin')->group(function() {
  Route::group([
    'middleware' => ['auth', 'isAdmin'],
    'namespace' => 'App\Http\Controllers\Admin'
  ], function() {
    Route::resource('category', CategoryController::class);
    Route::resource('user', UserController::class);
    Route::resource('article', ArticleController::class);
  });
});
