<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){

    // METODO 1
    // return view('home', ['name' => 'Mario', 'lastname' => 'Pappardello'])

    // METODO 2
    // $data = [
    //     'name' = 'Mario',
    //     'lastname' = 'Pappardello'
    // ];
    // return view('home', $data);

    // METODO 3
    $name = 'Mario';
    $lastname = 'Pappardello';

    return view('home', compact('name', 'lastname'));

})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');
