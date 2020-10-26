<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sendForm;
use App\Http\Controllers\shopController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\photos6;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\marcasController;
use App\Http\Controllers\tienda;




// INDEX
Route::get('/', [indexController::class, 'index'] ); 
Route::get('index',[indexController::class, 'index']);

// FORM SEND
Route::post('sendForm',[sendForm::class, 'enviar']);

// TIENDA INDEX
Route::resource('shop', shopController::class);

// ADMIN
Route::get('superusuario',[adminController::class, 'index']);
Route::resource('photos6', photos6::class);
Route::resource('slider', sliderController::class);
Route::resource('marcas', marcasController::class);
Route::resource('tienda', tienda::class);





