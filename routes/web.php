<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('home');
});

Route::prefix('categories')->group(function () {
    Route::get('/create', [
        'as' => 'categories.create',
        'uses' => 'CategoryController@create'
    ]);
    Route::get('/', [
        'as' => 'categories.index',
        'uses' => 'CategoryController@index'
    ]);
    Route::post('/store', [
        'as' => 'category.store',
        'uses' => 'CategoryController@store'
    ]);
});

Route::prefix('')->group(function () {
    Route::get('home', [
        'as' => 'home',
        'uses' => 'HomeController@home'
    ]);
});

