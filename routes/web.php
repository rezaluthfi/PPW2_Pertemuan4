<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // Add this line to import the PostController class
use App\Http\Controllers\EmployeeController; // Add this line to import the EmployeeController class

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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Reza Luthfi Akbar',
        'email' => 'rezaluthfiakbar@dummy.com',
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/employees', [EmployeeController::class, 'index']);
