@component('mail::message')

Telefono: {{ $dato['tel'] }} <br>
Correo:  {{$dato['email']}} <br>
Mensaje: {{ $dato['msg'] }}<br>



<h3> {{$dato['name']}} </h3>

@endcomponent
