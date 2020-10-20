<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class correoElectronico extends Mailable
{
    use Queueable, SerializesModels;

    
    public $dato;


    public function __construct($datos)
    { 
        $this->dato = $datos;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        return $this->view('mails.email')
        ->to($this->dato)
        ->subject('Solicitud Usuario');

    }
}
