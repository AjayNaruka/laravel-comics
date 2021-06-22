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

$header_links = [
    'home',
    'characters',
    'comics',
    'shop'
];

Route::get('/', function () {
    $data = [
        'links'=>[
            'home',
            'characters',
            'comics',
            'shop'
        ]
        ];
    return view('home',$data);
})->name('home');
Route::get('characters', function () {
    $data = [
        'links'=>[
            'home',
            'characters',
            'comics',
            'shop'
        ]
        ];
    return view('characters',$data);
})->name('characters');

Route::get('comics', function () {
    $data = [
        'links'=>[
            'home',
            'characters',
            'comics',
            'shop'
        ]
        ];
    return view('comics',$data);
})->name('comics');

Route::get('shop', function () {
    $data = [
        'links'=>[
            'home',
            'characters',
            'comics',
            'shop'
        ]
        ];
    return view('shop',$data);
})->name('shop');
