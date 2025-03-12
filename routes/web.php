<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;


Route::get('/', function () {
    return 'Hello, Laravel!'; 
});

Route::get('/greeting', [GreetController::class, 'showGreeting']);

Route::get('/', function () {
    return view('welcome'); // Or create a new view
});