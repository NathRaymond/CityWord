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

Route::get('/', [App\Http\Controllers\CityController::class, 'city_index'])->name('city_page');

Route::get('city_data', [App\Http\Controllers\CityController::class, 'city_index_data'])->name('city_index_data');

Route::get('search', [App\Http\Controllers\CityController::class, 'special_search'])->name('specialsearch');

Route::get('city_export', [App\Http\Controllers\CityController::class, 'get_city_data'])->name('city.export');