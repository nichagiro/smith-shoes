
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
    <title>Formulario</title>
</head>
<body>
    <div>
        <b class="float-left text-color-primary"> Nombre: </b>  
        <p> {{ $datos->name }}</p>
    </div>
    <div>
        <b class="float-left text-color-primary" > Email: </b>  
        <p> {{ $datos->email }}</p>
    </div>
    <div>
        <b class="float-left text-color-primary" > Telefono: </b>  
        <p> {{ $datos->tel }}</p>
    </div>
    <div>
        <b class="float-left text-color-primary" > Mensaje: </b>
        <p> {{ $datos->msg }}</p>
    </div>    
</body>

</html>