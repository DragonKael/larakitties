<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
// use App\Http\Controllers\UserController;

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
Route::redirect('/','home');
Route::redirect('logout','/');
Route::get('/', function () {
    return view('layouts.admin');
})->name('home')->middleware('auth');

Route::resource('cat', CatController::class);
//Route::resource('cat', 'CatController');
// Route::get('/', function () {
//     return view('welcome');
// });
//
//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------
// Route::get('/', function () {
//     return view('welcome');
// });
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------
//

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
