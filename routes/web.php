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
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/photos', [App\Http\Controllers\HomeController::class, 'photos'])->name('photos');
Route::get('/media', [App\Http\Controllers\HomeController::class, 'media'])->name('media');
Route::get('/qs_details/{id}', [App\Http\Controllers\HomeController::class, 'qs_details'])->name('qs_details');
Route::get('/item_details/{id}', [App\Http\Controllers\HomeController::class, 'item_details'])->name('item_details');
Route::get('/item_service_details/{id}', [App\Http\Controllers\HomeController::class, 'item_service_details'])->name('item_service_details');
Route::get('/itemsByCategory/{cat_id}/{unit_id}', [App\Http\Controllers\HomeController::class, 'itemsByCategory'])->name('itemsByCategory');



Route::get('/offer', [App\Http\Controllers\HomeController::class, 'offers'])->name('offer');
Route::get('/items_service/{id}', [App\Http\Controllers\HomeController::class, 'items_service'])->name('items_service');


Route::get('/items/{id}', [App\Http\Controllers\HomeController::class, 'items'])->name('items');


});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
