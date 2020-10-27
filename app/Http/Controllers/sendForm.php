<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\correoElectronico;



class sendForm extends Controller
{
    public function enviar(Request $request){

        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
            'mensaje' => 'required|max:1000'
        ]);

        $datos= $request->all(); 

        Mail::to('nicolaschamorro@cisde.co')
        ->send(new correoElectronico($datos));

        return back()->with('status','Correo enviado, nos comunicaremos con usted lo mas pronto posible');

    }
    
}
