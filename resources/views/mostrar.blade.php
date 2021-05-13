<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
</head>
<body>
   <ul>
        <li>Apellido:{{$aux->apellido_familiar[0]}}</li>
        <li>DNI:{{$aux->dni_familiar[0]}}</li> 
        <hr>
        <li>Apellido:{{$aux->apellido_familiar[1]}}</li>
        <li>DNI:{{$aux->dni_familiar[1]}}</li>     
   </ul>
</body>
</html>