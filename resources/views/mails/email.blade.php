@component('mail::message')

Telefono: {{ $dato['telefono'] }} <br>
Correo:  {{$dato['email']}} <br>
Mensaje: {{ $dato['mensaje'] }}<br>



<h3> {{$dato['nombre']}} </h3>

@endcomponent
