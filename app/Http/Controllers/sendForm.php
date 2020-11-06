<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\correoElectronico;



class sendForm extends Controller
{
    public function enviar(Request $request){

        $request->validate([
            'privacidad' => 'required',
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
            'mensaje' => 'required|max:1000'
        ]);

        $datos= $request->all(); 

        Mail::to('calzado@smith-shoes.com')
        ->queue(new correoElectronico($datos));

        return back()->with('status','Correo enviado, nos comunicaremos con usted lo mas pronto posible');

    }
    
}
