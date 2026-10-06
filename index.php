<?php

define("GIMNASIO", "FitLife Studio");
define("PUNTOS_POR_MINUTO", 10);


$nombre = "Lucas";
$apellido = "Fernandez";
$peso = 70;
$altura = 1.75;
$minutos = 40;


$nombreCompleto = $nombre . " " . $apellido;
$puntosObtenidos = $minutos * PUNTOS_POR_MINUTO;
$alturaAlCuadrado = $altura * $altura;
$imc = $peso / $alturaAlCuadrado;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <title>Reporte de Entrenamiento</title>
    <link rel="stylesheet" href="estilos.css">
    
</head>
    
<body>

    <div class="tarjeta">
        <h1><?php echo GIMNASIO; ?></h1>
        <p><strong>Alumno:</strong> <?php echo $nombreCompleto; ?></p>
        <p><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
        <p><strong>Altura:</strong> <?php echo $altura; ?> m</p>
        
        <hr>
        
        <p class="resultado">IMC calculado: <?php echo $imc; ?></p>
        <p class="resultado">Puntos obtenidos: <?php echo $puntosObtenidos; ?></p>
        
    </div>

</body>
</html>
