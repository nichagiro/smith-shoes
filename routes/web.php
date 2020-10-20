<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sendForm;



Route::get('/', function () {
    return view('index'); 
});

Route::post('sendForm',[sendForm::class, 'enviar']);