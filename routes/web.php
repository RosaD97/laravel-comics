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

    $data = [
        'comics' => config('comics')
    ];

    return view('home', $data);
})->name('home');


Route::get('/comics/{index}', function ($index) {

    $comics = config('comics');

      $data = [
         'comics' => $comics[$index]
     ];

    return view('comics', $data);
})->name('comics')->where('index', '[0-9]+');

