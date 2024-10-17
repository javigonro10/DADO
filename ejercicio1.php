<?php 
// Ejercicio 1
// Escriba un programa que cada vez que se ejecute muestre la tirada de entre 1 y 10
// dados al azar y diga el número de valores pares e impares obtenidos.

// Función que indica el número de dados que se van tirar entre 1-10
function generarNumeroTiradas() {
    return rand(1, 10);
}

// Función para tirar los dados con valor entre 1-6
function realizarTiradas($numeroTiradas) {
    $contadorPares = 0;
    $resultados = [];

    for ($i = 0; $i < $numeroTiradas; $i++) {
        $tirada = rand(1, 6);
        // Si es número par, suma 1
        if ($tirada % 2 == 0) {
            $contadorPares++;
        }
        // El resultado se incluye en un array
        $resultados[] = $tirada;
    }

    return [$resultados, $contadorPares];
}

// Función para mostrar los resultados
function mostrarResultados($resultados, $contadorPares) {
    // Recorre el array resultados y por cada tirada se saca la imagen del dado que corresponde con su valor
    foreach ($resultados as $tirada) {
        echo "<img src='img/Dado $tirada.svg' alt='dado$tirada'>";
    }

    // Contador de número de tiradas
    $numeroTiradas = count($resultados);
    echo "<p>Se han obtenido $contadorPares valores pares y " . ($numeroTiradas - $contadorPares) . " valores impares.</p>";
}

$numeroTiradas = generarNumeroTiradas();
list($resultados, $contadorPares) = realizarTiradas($numeroTiradas);

echo "<h1>Se han realizado $numeroTiradas tiradas de dados</h1>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DADO</title>
    <!-- Añado css -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Resultado de la tirada</h2>
    <?php
    mostrarResultados($resultados, $contadorPares);
    ?>
</body>
</html>
