<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'getDashboard'])
                ->middleware('auth')
                ->name('dashboard');

Route::get('/dashboard', [PostController::class, 'getDashboard'])
                ->middleware('auth')
                ->name('dashboard');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', [PostController::class, 'getDashboard'])
    ->middleware('auth')
    ->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
});

Route::get('/tweet', [PostController::class, 'getDashboard'])
                ->middleware('auth')
                ->name('tweet');

require __DIR__.'/auth.php';
