<?php
// Módulo que realiza una carga automática de la matriz
function matrizAuto() {
   $matriz = [
       2014 => [30, 28, 26, 22, 18, 12, 10, 14, 17, 20, 25, 29],
       2015 => [33, 30, 27, 22, 19, 13, 11, 15, 18, 21, 26, 31],
       2016 => [34, 32, 29, 21, 18, 14, 12, 16, 18, 21, 27, 32],
       2017 => [33, 31, 28, 22, 18, 13, 11, 14, 17, 22, 26, 31],
       2018 => [32, 30, 28, 22, 17, 12, 9, 13, 16, 20, 24, 30],
       2019 => [32, 30, 27, 23, 19, 14, 12, 11, 17, 23, 25, 29],
       2020 => [31, 29, 28, 21, 19, 13, 10, 12, 16, 22, 27, 29],
       2021 => [30, 28, 26, 20, 16, 12, 11, 13, 17, 21, 28, 30],
       2022 => [31, 29, 27, 21, 17, 12, 11, 15, 18, 22, 26, 30],
       2023 => [32, 30, 27, 20, 16, 13, 13, 15, 19, 23, 28, 31],
   ];
   return $matriz; // Retorna carga automática
}


// Módulo que realiza una carga manual de la matriz
function matrizManual() {
   $matriz = [];
   $meses = [
       0 => "enero", 1 => "febrero", 2 => "marzo", 3 => "abril", 4 => "mayo", 5 => "junio",
       6 => "julio", 7 => "agosto", 8 => "septiembre", 9 => "octubre", 10 => "noviembre", 11 => "diciembre",
   ];
   // PARA: pasa por año y por mes, pidiendo una temperatura por cada año y mes
   for ($anio = 2014; $anio <= 2023; $anio++) {
       for ($mes = 0; $mes <= 11; $mes++) {
           echo "Ingrese la temperatura del año " . $anio . " del mes de " . $meses[$mes] . ": ";
           $temp = trim(fgets(STDIN));
           $matriz[$anio][$mes] = $temp;
       }
   }
   return $matriz; // Retorna carga manual
}


// Función que muestra el contenido de la matriz por filas y columnas.
function mostrarMatrizCompleta($matriz) {
   echo "Año ENE   FEB   MAR   ABR   MAY   JUN   JUL   AGO   SEP   OCT   NOV   DIC \n"; // Imprime un texto con el año y los meses
   for ($anio = 2014; $anio <= 2023; $anio++) {        // PARA: pasa por año, escribiendo en fila año por año
       echo $anio . " ";
       for ($mes = 0; $mes <= 11; $mes++) {           // PARA: pasa por mes, escribiendo la temperatura
           echo $matriz[$anio][$mes] . "°C" . "  ";
       }
       echo "\n";
   }
}


// Función que muestra una temperatura dado un mes y un año
function mostrarTemperaturasAnioMes($matriz, $anio, $mes, $meses) {
   if ($anio >= 2014 && $anio <= 2023) {                                                        //Pasa por todos los años
       if ($mes >= 0 && $mes <= 11) {                                                              // Valida si el mes está entre 0 y 11
           echo "La temperatura del año " . $anio . " del mes " . $meses[$mes] . " es: " . $matriz[$anio][$mes] . "°C\n";     // Imprime la salida
       } else {
           echo "Mes no válido";
       }
   } else {
       echo "Año no válido";
   }
}


function mostrarTemperaturasAnio($matriz, $anio){
   if ($anio >= 2014 && $anio <= 2023) {
       echo "La temperatura de todo el año: " . $anio . "\n";
       echo "ENE   FEB   MAR   ABR   MAY   JUN   JUL   AGO   SEP   OCT   NOV   DIC \n";
       for ($mes = 0; $mes <= 11; $mes++) {
           echo $matriz[$anio][$mes] . "°C" . "  ";
       }
   } else {
       echo "Año no válido \n";
   }
   echo "\n";
}


function mostrarTemperaturasMes($mes, $matriz, $meses) {
   if ($mes >= 0 && $mes <= 11) {
       for ($anio = 2014; $anio <= 2023; $anio++) {
           echo "La temperatura en " . $anio . " de: " . $meses[$mes] . " es: " . $matriz[$anio][$mes] . "°C\n";
       }
   } else {
       echo "Mes no válido";
   }
}


function calcularPromedio($mes, $matriz){
   $promedio = 0;
   $totalDecada = 0;
   if ($mes >= 0 && $mes <= 11) {
       for ($anio = 2014; $anio <= 2023; $anio++) {
           $totalDecada += $matriz[$anio][$mes];
       }
       $promedio = $totalDecada / 10;
   }
   return $promedio;
}


function hallarMaxMin($matriz, $meses) {
   $maxTemp = -99999;
   $minTemp = 99999;
   for ($anio = 2014; $anio <= 2023; $anio++) {
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


function datosPrimavera($matriz, $meses){
   echo "Temperaturas en primavera: " . "\n";
   echo "Año OCT   NOV   DIC \n";


   for ($anio = 2014; $anio <= 2023; $anio++) {
       echo $anio . " ";
       for ($mes = 9; $mes <= 11; $mes++) {
           echo $matriz[$anio][$mes] . "°C" . "  ";
       }
       echo "\n";
   }
}


function datosInvierno($matriz, $meses) {
   echo "Temperaturas en invierno: " . "\n";
   echo "Año JUL   AGO  SEP " . "\n";
   for ($anio = 2019; $anio <= 2023; $anio++) {
       echo $anio . " ";
       for ($mes = 6; $mes <= 8; $mes++) {
           echo $matriz[$anio][$mes] . "°C" . "  ";
       }
       echo "\n";
   }
}


function mostrarMatrizAsociativa($matriz, $meses) {
   $primavera = $matriz;
   $invierno = $matriz;
   $asociativo = [
       "completa" => $matriz,
       "Primavera" => $primavera,
       "Invierno" => $invierno,
   ];


   echo "Año ENE   FEB   MAR   ABR   MAY   JUN   JUL   AGO   SEP   OCT   NOV   DIC \n"; //Se imprime la matriz completa en pantalla
   for ($anio = 2014; $anio <= 2023; $anio++) {                                       //Pasa por todos los años
       echo $anio . " ";                                                                  //Imprime el año
       for ($mes = 0; $mes <= 11; $mes++) {                                                //Pasa por todos los meses
           echo $asociativo["completa"][$anio][$mes] . "°C" . "  ";                          //Imprime las temperaturas
       }
       echo "\n";
   }


   echo "Primavera \n";
   echo "Año OCT   NOV   DIC \n";
   for ($anio = 2014; $anio <= 2023; $anio++) {                             //Pasa por todos los años
       echo $anio . " ";                                                  //Imprime el año
       for ($mes = 9; $mes <= 11; $mes++) {                         //Pasa por los meses OCT-NOV-DIC
           echo $asociativo["Primavera"][$anio][$mes] . "°C" . "  ";     //Imprime las temperaturas
       }
       echo "\n"; //Salto de línea
   }


   echo "Invierno \n";
   echo "Año JUL   AGO   SEP \n";
   for ($anio = 2019; $anio <= 2023; $anio++) {                   //Pasa por todos los años
       echo $anio . " ";                                             //Imprime el año
       for ($mes = 6; $mes <= 8; $mes++) {                           //Pasa por los meses JUL-AGO-SEP
           echo $asociativo["Invierno"][$anio][$mes] . "°C" . "  ";      //Imprime las temperaturas
       }
       echo "\n"; //Salto de línea
   }


   return $asociativo;
}
$matriz = [];
$meses = [
   0 => "enero", 1 => "febrero", 2 => "marzo", 3 => "abril", 4 => "mayo", 5 => "junio",
   6 => "julio", 7 => "agosto", 8 => "septiembre", 9 => "octubre", 10 => "noviembre", 11 => "diciembre",
];


do {
   echo "MENÚ DE OPCIONES \n";
   echo "1. Cargar datos automáticamente. \n";
   echo "2. Cargar datos manualmente. \n";
   echo "3. Mostrar contenido. \n";
   echo "4. Mostrar temperatura dado un mes y un año. \n";
   echo "5. Mostrar para un determinado año, las temperaturas de todos los meses. \n";
   echo "6. Mostrar para un mes determinado, las temperaturas de todos los años y el promedio. \n";
   echo "7. Hallar las temperaturas máximas y mínimas. \n";
   echo "8. Mostrar temperaturas de primavera. \n";
   echo "9. Mostrar temperaturas de invierno. \n";
   echo "10. Mostrar arreglo asociativo. \n";
   echo "0. Salir. \n";


   $maxTemp = -99999;
   $minTemp = 99999;
   $anioMax = " ";
   $mesMax = " ";
   $mesMin = " ";
   $anioMin = " ";


   echo "\n";
   $opcion = trim(fgets(STDIN));


   switch ($opcion) {
       case 1:
           $matriz = matrizAuto();
           echo "Datos cargados automáticamente.\n";
           break;
       case 2:
           $matriz = matrizManual();
           echo "Datos cargados manualmente.\n";
           break;
       case 3:
           mostrarMatrizCompleta($matriz);
           break;
       case 4:
           echo "Ingrese el año: ";
           $anio = trim(fgets(STDIN));
           echo "Ingrese el mes:";
           $mes = trim(fgets(STDIN));
           mostrarTemperaturasAnioMes($matriz, $anio, $mes, $meses);
           break;
       case 5:
           echo "Ingrese el año: ";
           $anio = trim(fgets(STDIN));
           mostrarTemperaturasAnio($matriz, $anio);
           break;
       case 6:
           echo "Ingrese el mes: ";
           $mes = trim(fgets(STDIN));
           mostrarTemperaturasMes($mes, $matriz, $meses);
           $promedio = calcularPromedio($mes, $matriz);
           echo "El promedio de " . $meses[$mes] . " es " . $promedio . "°C\n";
           break;
       case 7:
           hallarMaxMin($matriz, $meses);
           break;
       case 8:
           datosPrimavera($matriz, $meses);
           break;
       case 9:
           datosInvierno($matriz, $meses);
           break;
       case 10:
           $asociativo = mostrarMatrizAsociativa($matriz, $meses);
           print_r($asociativo);
           break;
       case 0:
           echo "Fin programa. \n";
           break;
       default:
           echo "Opción no válida. \n";
   }


} while ($opcion != 0);

