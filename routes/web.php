<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sendForm;
use App\Http\Controllers\shopController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\photos6;



// INDEX
Route::get('/', [indexController::class, 'index'] ); 
Route::get('index',[indexController::class, 'index']);

// FORM SEND
Route::post('sendForm',[sendForm::class, 'enviar']);

// TIENDA
Route::resource('shop', shopController::class);

// ADMIN
Route::get('superusuario',[adminController::class, 'index']);
Route::resource('photos6', photos6::class);



