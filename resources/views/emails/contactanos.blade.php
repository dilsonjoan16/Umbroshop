<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo de contacto</title>

    <style>
        h1{
            color: rgba(68, 218, 205, 0.7); 
        }
        p{
            font: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    <h1>
        Correo electronico
    </h1>  
    <p>
        <strong>Nombre:</strong>{{$contacto['nombre']}}
        <strong>Correo:</strong>{{$contacto['correo']}}
        <strong>Mensaje:</strong>{{$contacto['mensaje']}}
    </p>
</body>
</html>