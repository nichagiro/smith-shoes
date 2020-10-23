<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\correoElectronico;



class sendForm extends Controller
{
    public function enviar(Request $request){

        $datos= $request->all(); 

        Mail::to('nicolaschamorro@cisde.co')
        ->send(new correoElectronico($datos));



    }
    
}
