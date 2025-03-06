<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

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
    return 'Hello, Laravel!'; 
});

Route::get('/greeting', [GreetController::class, 'showGreeting']);

Route::get('/greeting', [GreetController::class, 'showGreeting']);

