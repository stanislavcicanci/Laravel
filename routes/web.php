<?php

use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\alert;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    $np = "Cicanci Stanislav";
    $email = "stanislavacicanci@gmail.com";
    return view('contacts', ['np' => $np, 'email' => $email]);
});
Route::get('/about', function () {
    $grupe = ['P-2041', 'W-2041', 'R-2041', 'W-2042', 'W-2043'];
     
    return view('about', ['grupe' => $grupe, 'script' => "<script> alert('Fii atent la  ore')</script>"]);
});

