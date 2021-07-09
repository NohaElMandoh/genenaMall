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
    return redirect('/home');
});

Auth::routes();

Route::group(['prefix' => LaravelLocalization::setLocale()], function(){

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/newsLetter', [App\Http\Controllers\HomeController::class, 'newsLetter']);
Route::get('/entertainment', [App\Http\Controllers\HomeController::class, 'entertainment'])->name('entertainment');
Route::get('/shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');
Route::get('/restaurant', [App\Http\Controllers\HomeController::class, 'restaurant'])->name('restaurant');
Route::get('/kids', [App\Http\Controllers\HomeController::class, 'emoje'])->name('kids');


Route::get('/items', [App\Http\Controllers\HomeController::class, 'items'])->name('items');


});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
