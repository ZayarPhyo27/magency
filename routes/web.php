<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\NavController;
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

Route::get('/academy', [NavController::class, 'academy']);
Route::get('/feature', [NavController::class, 'feature']);
Route::get('/philosophy', [NavController::class, 'philosophy']);
Route::get('/overview', [NavController::class, 'overview']);
Route::get('/about', [NavController::class, 'about']);
Route::get('/memory', [NavController::class, 'memory']);
Route::get('/achievement', [NavController::class, 'achievement']);






Route::get('lang/{lang}',['as' => 'lang.switch','uses' => 'App\Http\Controllers\LanguageController@switchLang'] );

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('languageDemo','App\Http\Controllers\HomeController@languageDemo');
