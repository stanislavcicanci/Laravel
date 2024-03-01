<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\StudentController;
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

Route::get('/', [MyController::class, 'Home'])-> name('home');
Route::get('/contacts', [MyController::class, 'Contacts'] )-> name('contents');
Route::get('/about', [MyController::class, 'About'])-> name('about');
Route::get('/info', [MyController::class, 'Info'])-> name('info');
Route::get('/student', [StudentController::class, 'show'])-> name('student');
