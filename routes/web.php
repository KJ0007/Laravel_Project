<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;



Route::get('/open', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('index');
});


Route::middleware('auth')->group(function (){
    
    Route::get('/',[FeedbackController::class , 'index']);
    Route::post('/',[FeedbackController::class , 'connect']);
    Route::get('/set',[FeedbackController::class , 'show'])->name('set.show');
    
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
