@extends('layouts.plantilla')
@section('contenido')
    <h3>Hola desde quienes somos</h3>

    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body >
<center>

    <h1> bienvenido</h1>
    <p> </p>
    <h1>juego para lanzar y obtener el numero mayor</h1>
    <h1></h1>
    <h1></h1>
    <h1></h1>
    <button> </button><?php


$d1=rand(1,6);
$d2=rand(1,6);

echo " <b> los datos tienen $d1,$d2: ";
$av=$d1+$d2;
echo " <br> tienes  $av puntos ";


?>
<h1><a href="inicio" class="btn btn-warning" >lanzar dados</a> </h1>

</center>

</body>
</html>

@endsection
