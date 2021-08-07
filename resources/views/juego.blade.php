@extends('layouts.plantilla')
@section('contenido')<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1>  .............................CASINO EL TUMBADOR.......</h1></a>
    
    </div>
  
</nav>


    <div class="flex-container"> 
    
<?php
session_start();

$numero1 = mt_rand(1,3);
$numero2 = mt_rand(1,3);
$numero3 = mt_rand(1,3);
$numero4 = mt_rand(1,3);

echo '<img src="imagenes/'.$numero1.'.jpg" />';
echo '-<img src="imagenes/'.$numero2.'.jpg" />';
echo '-<img src="imagenes/'.$numero3.'.jpg" />';
echo '-<img src="imagenes/'.$numero4.'.jpg" />';


if (!isset($_SESSION['oro']) OR isset($_GET['reiniciar']))
{
$_SESSION['oro'] = 1000;
}


?>


<?php




if($_SESSION['oro']>=100)
{
    if($numero1==$numero2 or $numero1==$numero3 or $numero1==$numero4){
        echo "<br>GANASTE";
        $_SESSION['oro']=$_SESSION['oro']*2;
        }else
        {
        $_SESSION['oro']=$_SESSION['oro']-100;
        echo"<BR>PERDISTE";
        
    }
}else {
    echo " valla que su mama lo peine ";
}
echo " <b> <br><br>su DINERO es:</b>".$_SESSION['oro'];
echo ' <br><br><br><a class="btn btn-warning"href="juego.php">jugar</a>';
echo ' <br><br><br><a class="btn btn-success" href="juego.php?reiniciar=1"> reiniciar</a>';



?>
 </div>
</body>
</html>
@endsection
