<?php
// Carga automática
function cargaAutomatica() {
    $temperaturas = array(
        "2014" => array(
            "Enero" => 30, "Febrero" => 28, "Marzo" => 26, "Abril" => 22, "Mayo" => 18, "Junio" => 12, "Julio" => 10, "Agosto" => 14, "Septiembre" => 17, "Octubre" => 20, "Noviembre" => 25, "Diciembre" => 29
        ),
        "2015" => array(
            "Enero" => 33, "Febrero" => 30, "Marzo" => 27, "Abril" => 22, "Mayo" => 19, "Junio" => 13, "Julio" => 11, "Agosto" => 15, "Septiembre" => 18, "Octubre" => 21, "Noviembre" => 26, "Diciembre" => 31
        ),
        "2016" => array(
            "Enero" => 34, "Febrero" => 32, "Marzo" => 29, "Abril" => 21, "Mayo" => 18, "Junio" => 14, "Julio" => 12, "Agosto" => 16, "Septiembre" => 18, "Octubre" => 21, "Noviembre" => 27, "Diciembre" => 32
        ),
        "2017" => array(
            "Enero" => 33, "Febrero" => 31, "Marzo" => 28, "Abril" => 22, "Mayo" => 18, "Junio" => 13, "Julio" => 11, "Agosto" => 14, "Septiembre" => 17, "Octubre" => 22, "Noviembre" => 26, "Diciembre" => 31
        ),
        "2018" => array(
            "Enero" => 32, "Febrero" => 30, "Marzo" => 28, "Abril" => 22, "Mayo" => 17, "Junio" => 12, "Julio" => 9, "Agosto" => 13, "Septiembre" => 16, "Octubre" => 20, "Noviembre" => 24, "Diciembre" => 30
        ),
        "2019" => array(
            "Enero" => 32, "Febrero" => 30, "Marzo" => 27, "Abril" => 23, "Mayo" => 19, "Junio" => 14, "Julio" => 12, "Agosto" => 11, "Septiembre" => 17, "Octubre" => 23, "Noviembre" => 25, "Diciembre" => 29
        ),
        "2020" => array(
            "Enero" => 31, "Febrero" => 29, "Marzo" => 28, "Abril" => 21, "Mayo" => 19, "Junio" => 13, "Julio" => 10, "Agosto" => 12, "Septiembre" => 16, "Octubre" => 22, "Noviembre" => 27, "Diciembre" => 29
        ),
        "2021" => array(
            "Enero" => 30, "Febrero" => 28, "Marzo" => 26, "Abril" => 20, "Mayo" => 16, "Junio" => 12, "Julio" => 11, "Agosto" => 13, "Septiembre" => 17, "Octubre" => 21, "Noviembre" => 28, "Diciembre" => 30
        ),
        "2022" => array(
            "Enero" => 31, "Febrero" => 29, "Marzo" => 27, "Abril" => 21, "Mayo" => 17, "Junio" => 12, "Julio" => 11, "Agosto" => 15, "Septiembre" => 18, "Octubre" => 22, "Noviembre" => 26, "Diciembre" => 30
        ),
        "2023" => array(
            "Enero" => 32, "Febrero" => 30, "Marzo" => 27, "Abril" => 20, "Mayo" => 16, "Junio" => 13, "Julio" => 13, "Agosto" => 15, "Septiembre" => 19, "Octubre" => 23, "Noviembre" => 28, "Diciembre" => 31
        )
    );

    return $temperaturas;

}


function cargaManual() {
    $temperaturas = array();
    $anios = array("2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022", "2023");
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    foreach ($anios as $anio) {
        foreach ($meses as $mes) {
            echo "Ingrese la temperatura para el año $anio, mes $mes: ";
            $temperatura = trim(fgets(STDIN));
            $temperaturas[$anio][$mes] = $temperatura;
        }
    }

    return $temperaturas;
}


function mostrarFilasColumnas($temperaturas) {
    echo "Filas:\n";
    foreach ($temperaturas as $anio => $datosMes) {
        echo "Año $anio:\n";
        foreach ($datosMes as $mes => $temperatura) {
            echo "$mes: $temperatura\n";
        }
    }

    echo "Columnas:\n";
    $primerAnio = array_keys($temperaturas)[0];
    $meses = array_keys($temperaturas[$primerAnio]);
    foreach ($meses as $mes) {
        echo "$mes:\n";
        foreach ($temperaturas as $anio => $datosMes) {
            echo "$anio: $datosMes[$mes]\n";
        }
    }
}

function mostrarTemperaturaAnioMes($temperaturas, $anio, $mes) {
    if (isset($temperaturas[$anio]) && isset($temperaturas[$anio][$mes])) {
        echo "La temperatura en $mes de $anio es: " . $temperaturas[$anio][$mes] . "\n";
    }
}

function mostrarTemperaturasAnio($temperaturas, $anio) {
    if (isset($temperaturas[$anio])) {
        echo "Temperaturas de $anio:\n";
        foreach ($temperaturas[$anio] as $mes => $temperatura) {
            echo "$mes: $temperatura\n";
        }
    }
}

function mostrarTemperaturasMes($temperaturas, $mes) {
    $total = 0;
    $contTemp = 0;

    echo "Temperaturas para el mes de $mes:\n";
    foreach ($temperaturas as $anio => $datosMes) {
        if (isset($datosMes[$mes])) {
            $temperatura = $datosMes[$mes];
            echo "$anio: $temperatura\n";
            $total += $temperatura;
            $contTemp++;
        }
    }

    if ($contTemp > 0) {
        $prom = $total / $contTemp;
        echo "El promedio de temperaturas del mes es: $prom\n";
    }
}

function hallarMaxMin($temperaturas) {
    $maxTemperatura = 0;
    $minTemperatura = 9999;
    $anioMax = 0;
    $mesMax = "";
    $anioMin = 0;
    $mesMin = "";

    foreach ($temperaturas as $anio => $datosMes) {
        foreach ($datosMes as $mes => $temperatura) {
            if ($temperatura > $maxTemperatura) {
                $maxTemperatura = $temperatura;
                $anioMax = $anio;
                $mesMax = $mes;
            }
            if ($temperatura < $minTemperatura) {
                $minTemperatura = $temperatura;
                $anioMin = $anio;
                $mesMin = $mes;
            }
        }
    }

    echo "Temperatura máxima: $maxTemperatura (Año: $anioMax, Mes: $mesMax)\n";
    echo "Temperatura mínima: $minTemperatura (Año: $anioMin, Mes: $mesMin)\n";
}

function datosPrimavera($temperaturas) {
    $datosPrimavera = [];

    foreach ($temperaturas as $anio => $datosMes) {
        foreach (["Octubre", "Noviembre", "Diciembre"] as $mes) {
            if (isset($datosMes[$mes])) {
                $datosPrimavera[$anio][$mes] = $datosMes[$mes];
            }
        }
    }

    return $datosPrimavera;
}

function datosInvierno($temperaturas) {
    $datosInvierno = [];
    

    foreach ($temperaturas as $anio => $datosMes) {
        foreach (["Julio", "Agosto", "Septiembre"] as $mes) {
            if (isset($datosMes[$mes])) {
                $datosInvierno[$anio][$mes] = $datosMes[$mes];
            }
        }
    }

    return $datosInvierno;
}



//Programa principal TEMPERATURAS

do { 
    echo "Menú de opciones: \n";
    echo "1. Cargar matriz automática. 2. Cargar matriz manual. \n";
    echo "3. Mostrar el contenido de la matriz por filas y columnas. \n";
    echo "4. Mostrar temperatura dado un año y un mes. \n";
    echo "5. Mostrar para un determinado año, las temperaturas de todos los meses. \n";
    echo "6. Mostrar para un mes determinado, las temperaturas de todos los años y el promedio. \n";
    echo "7. Mostrar las temperaturas máximas y mínimas. \n";
    echo "8. Mostrar un arreglo con los datos de primavera. \n";
    echo "9. Mostrar un arreglo con los datos de invierno de los últimos 5 años. \n";
    echo "10. Mostrar arreglo. \n";
    echo "0. Salir\n";
    
    $opcion = trim(fgets(STDIN));

    switch ($opcion) {
        case 1: 
            $tipoMatriz = trim(fgets(STDIN));
            if ($tipoMatriz == 1) {
            $temperaturas = cargaAutomatica();
            } else {
            $temperaturas = cargaManual();
            }
        break;
        case 2: 
            mostrarFilasColumnas($temperaturas);
        break;
        case 3:
        echo "Ingrese el año: ";
        $anio = trim(fgets(STDIN));
        echo "Ingrese el mes: ";
        $mes = trim(fgets(STDIN));
        mostrarTemperaturaAnioMes($temperaturas, $anio, $mes);
        break;
        case 4:
        echo "Ingrese el año: ";
        $anio = trim(fgets(STDIN));
        mostrarTemperaturasAnio($temperaturas, $anio);
        break;
        case 5: 
        echo "Ingrese el mes: ";
        $mes = trim(fgets(STDIN));
        mostrarTemperaturasMes($temperaturas, $mes);
        break;
        case 6:
        hallarMaxMin($temperaturas);
        break;
        case 7:
        $datosPrimavera = datosPrimavera($temperaturas); 
        echo "Datos primavera: ";
        print_r($datosPrimavera);
        break;
        case 8: 
        $datosInvierno = datosInvierno($temperaturas); 
        echo "Datos invierno: ";
        print_r($datosInvierno);
        echo "\n";
        break;
        case 9:
        $compPrimInv = [
            "completa" => $temperaturas,
            "primavera" => $datosPrimavera,
            "invierno" => $datosInvierno
    ];
        print_r($compPrimInv);
        break;
        case 10:
        echo "Fin programa. ";
}

} while ($opcion != 0);
