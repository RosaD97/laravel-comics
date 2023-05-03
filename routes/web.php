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

    $comics = config('comics');
    // dd(compact('comics'));

    return view('home', compact('comics'));
})->name('home');


Route::get('/comics/{index}', function ($index) {

    $comics_all = config('comics');

    if($index > count($comics_all) -1){
         abort(404);
    }

     $comics = $comics_all[$index];
    // $comics = config('comics');


    return view('comics', compact('comics'));
})->name('comics')->where('index', '[0,9]+');

