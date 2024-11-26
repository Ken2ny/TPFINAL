<?php
// Funcion para calcular la Max y Min temperatura
function hallarMaxMin($matriz, $meses) {
    $maxTemp = -99999;
    $minTemp = 99999;
    for ($anio = 2014; $anio <= 2023; $anio++) {
        echo "Temperatura máxima \n";
        echo "Temperatura: " . $maxTemp . "°C\n";
        echo "Año: " . $anioMax . "\n";
        echo "Mes: " . $mesMax . "\n";
        echo "Temperatura mínima \n";
        echo "Temperatura: " . $minTemp . "°C\n";
        echo "Año: " . $anioMin . "\n";
        echo "Mes: " . $mesMin . "\n";
        for ($mes = 0; $mes <= 11; $mes++) {
            if ($matriz[$anio][$mes] < $minTemp) {
                $minTemp = $matriz[$anio][$mes];
                $anioMin = $anio;
                $mesMin = $meses[$mes];
            }
            if ($matriz[$anio][$mes] > $maxTemp) {
                $maxTemp = $matriz[$anio][$mes];
                $anioMax = $anio;
                $mesMax = $meses[$mes];
            }
            
        }
    }
    echo "Temperatura máxima \n";
    echo "Temperatura: " . $maxTemp . "°C\n";
    echo "Año: " . $anioMax . "\n";
    echo "Mes: " . $mesMax . "\n";
    echo "Temperatura mínima \n";
    echo "Temperatura: " . $minTemp . "°C\n";
    echo "Año: " . $anioMin . "\n";
    echo "Mes: " . $mesMin . "\n";
}

case 7:
        if (count($matriz)== 0) {
        echo "Datos no cargados \n";
        break;
        } else {
        hallarMaxMin($matriz, $meses);
        break;
        }