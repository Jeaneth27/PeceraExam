<?php
    $numero1=$_GET['Alto'];
    $numero2=$_GET['Ancho'];
    $numero3=$_GET['Largo'];
    $op=$_GET['opcion'];

    if($op=='Litros')
{
    $Litros= $numero1*$numero2*$numero3;
}

else if($op=='Galones')
{
    $total= $numero1*$numero2*$numero3*0.264;
}



echo '<h1> El resultado en litros es:'.$Litros.'</h1>';
echo '<h1> El resultado en galones es:'.$total.'</h1>';
echo '<br><br><a href ="Index.html">Ir al inicio</a>';

?>

<!DOCTYPE html>

<html>
<head>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <title>Resultado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
      <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
