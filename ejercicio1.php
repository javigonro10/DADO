<?php 
// Ejercicio 1
// Escriba un programa que cada vez que se ejecute muestre la tirada de entre 1 y 10
// dados al azar y diga el número de valores pares e impares obtenidos.
function generarNumeroTiradas() {
    return rand(1, 10);
}

function realizarTiradas($numeroTiradas) {
    $contadorPares = 0;
    $resultados = [];

    for ($i = 0; $i < $numeroTiradas; $i++) {
        $tirada = rand(1, 6);
        if ($tirada % 2 == 0) {
            $contadorPares++;
        }
        $resultados[] = $tirada;
    }

    return [$resultados, $contadorPares];
}

function mostrarResultados($resultados, $contadorPares) {
    foreach ($resultados as $tirada) {
        echo "<img src='img/Dado $tirada.svg' alt='dado$tirada'>";
    }

    $numeroTiradas = count($resultados);
    echo "<p>Se han obtenido $contadorPares valores pares y " . ($numeroTiradas - $contadorPares) . " valores impares.</p>";
}

$numeroTiradas = generarNumeroTiradas();
list($resultados, $contadorPares) = realizarTiradas($numeroTiradas);

echo "<h1>Se han realizado $numeroTiradas tiradas de dados</h1>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DADO</title>
    <!-- Añado css -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Resultado de la tirada</h1>
    <?php
    mostrarResultados($resultados, $contadorPares);
    ?>
</body>
</html>
