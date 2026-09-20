<?php
// Constantes (Unidad 4: declaradas con define, en mayúsculas y sin $)
define("GIMNASIO", "FitLife Studio");
define("PUNTOS_POR_MINUTO", 10);

// Variables (Unidad 4: tipo texto, entero y real con $)
$nombre = "Lucas";
$apellido = "Fernandez";
$peso = 70;             // en kg (entero)
$altura = 1.75;         // en metros (real / float)
$minutos = 40;          // minutos entrenados (entero)

// Operadores (Unidad 4: concatenación y operaciones aritméticas)
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
    <!-- Vinculación del archivo CSS externo -->
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