<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers;

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

Route::prefix('admin')->group(function() {
  Route::group([
    'middleware' => ['auth', 'isAdmin'],
    'namespace' => 'App\Http\Controllers\Admin'
  ], function() {
    Route::resource('category', CategoryController::class, [
      'as' => 'admin'
    ]);
    Route::resource('user', UserController::class, [
      'as' => 'admin'
    ]);
    Route::resource('article', ArticleController::class, [
      'as' => 'admin'
    ]);
    Route::get('/', [Controllers\Admin\DashboardController::class, 'index'])
      ->name('admin');
  });
});

Route::prefix('dashboard')->group(function() {
  Route::group([
    'middleware' => ['auth', 'isWriter'],
    'namespace' => 'App\Http\Controllers\Dashboard'
  ], function() {
    Route::resource('article', ArticleController::class, [
      'as' => 'dashboard'
    ]);
    Route::get('/', [Controllers\Dashboard\DashboardController::class, 'index'])
      ->name('dashboard');
  });
});
