<?php

use App\Http\Controllers\LoginController;
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
    return view('biodata');
})->middleware('auth')->name('home');

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/user/login', function() {
    return view('login');
})->name('login');

Route::post('/login/auth', [LoginController::class, 'login']);

Route::get('/pendidikan', [LoginController::class, 'pendidikan']);

Route::get('/biodata', function() {
    return view('pages.biodata');
});

Route::get('/home', function () {
    return view('pages.homeDesign');
});