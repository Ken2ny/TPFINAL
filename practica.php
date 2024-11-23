<?php
// ALGORITMO PRINCIPAL
//Nombre de los meses
$meses = [
  0 => "enero", 1 => "febrero",2 => "marzo",3 => "abril",4 => "mayo",5 => "junio",
  6 => "julio",7 => "agosto",8 => "septiembre",9 => "octubre",10 => "noviembre",11 => "diciembre",
  ];

do {
    $maxTemp = -99999;           //Acumulador Maxima temperatura
    $minTemp = 99999;            //Acumulador Minima temperatura
    $anhoMax = " ";          //Acumulador AnhoMaxTemp se anota el anho con mayor temp
    $mesMax = " ";           //Acumulador mesMaxTemp se anota el mes con mayor temp
    $mesMin = " ";           //Acumulador mesMinTemp se anota el mes con menor temp
    $anhoMin = " ";          //Acumulador anhoMinTemp se anota el anho con menor temp
    $continuar = true;           // Validar repeticion
  
echo "MENU DE OPCIONES \n";
echo "1. Cargar Datos Automaticamente \n";
echo "2. Cargar Datos Manualmente \n"; 
echo "3. Mostrar el contenido de matriz \n"; 
echo "4. Mostrar la temperatura de un anho y mes especifico \n"; 
echo "5. Mostrar la temperatura de todo un anho \n"; 
echo "6. Mostrar las temperaturas de un mes de cada anho y el promedio \n";
echo "7. Mostrar la minima y maxima temperatura, anho y mes \n";
echo "8. Mostrar matriz de primavera(oct-nov-dic) de
todos los años \n";
echo "9. Mostrar matriz de invierno últimos 5 años de
invierno (jul-ago-sep) \n";
echo "10. Mostrar matriz asociativa \n";
echo "11. Salir \n";

echo "Ingrese opcion(1-11): ";
$opcion = trim(fgets(STDIN));

switch($opcion) {
// CargaDatosAutomatico
case 1:
    $matriz = cargarDatosAuto();
    echo "Datos Automaticos Cargados \n";
    break;
// CargaDatosManual
case 2:
    $matriz = cargarDatosManual();
    echo "Datos Manuales Cargados \n";
    break;
// Muestra la matriz cargada
case 3:
    echo "Anho ENE   FEB   MAR   ABR   MAY   JUN   JUL   AGO   SEP   OCT   NOV   DIC \n"; // Imprime un texto con el anho y los meses
    for ($anho = 2014; $anho <= 2023; $anho++) {        // PARA = pasa por anho, escribiendo en fila anho x anho
    echo $anho . " ";
         
         for ($mes = 0; $mes <= 11; $mes++){           // PARA = pasa por mes, escribiendo la temperatura 
         echo $matriz[$anho][$mes]."°C" . "  "; 
       }
            echo "\n";       //Salto de linea
       }
       break;
// Muestra la temperatura del anho y mes
case 4:
  echo "ingrese el anho: ";              //Ingresamos el anho
  $anho = trim(fgets(STDIN));
  echo "ingrese el mes(1-12): ";         //Ingresamos el mes, del 1 a 12
  $mes = trim(fgets(STDIN)) - 1;         //Al numero ingresado se le resta 1 porque las array empiezan de 0

  if($anho >= 2014 && $anho <= 2023) {                                                        //Pasa por todos los anhos
   if ($mes >= 0 && $mes <= 11){                                                              //Valida si el mes esta entre 0 y 11
         echo "la temperatura del anho: " . $anho . " del mes: " . $meses[$mes] . " es: " . $matriz[$anho][$mes] . "°C\n";     // Imprime la salida
   } else {
    echo "mes no valido";
   }
} else {
    echo "anho no valido";
} 
    break;
// Muestra la temperatura de todo un anho
case 5:
    echo "ingrese el anho: ";
    $anho = trim(fgets(STDIN));

        if ($anho >= 2014 && $anho <= 2023){ 
        echo "la temperatura de todo el anho: " . $anho . "\n";
        echo "ENE   FEB   MAR   ABR   MAY   JUN   JUL   AGO   SEP   OCT   NOV   DIC \n";
            for ($mes = 0; $mes <= 11; $mes++){ 
            echo $matriz[$anho][$mes]."°C" . "  ";
        }
        echo "\n"; //Salto de linea
    } else {
     echo "anho no valido \n";
    }
    break;
// Muestra la temperatura de un solo mes durante los anhos  y el promedio
case 6:
    echo "Ingrese el mes(1-12): ";
    $mes = trim(fgets(STDIN)) - 1;
       
        if ($mes >= 0 && $mes <=11){
            for ($anho = 2014; $anho <= 2023; $anho++){
                echo "La temperatura en " . $anho  . " de: " . $meses[$mes] . " es: " . $matriz[$anho][$mes] . "°C\n";    
                }
                $promedio = calcularPromedio($mes, $matriz);   
                echo "El promedio de " . $meses[$mes] . " es " . $promedio . "°C\n";
        } else {
                  echo "datos no validos \n";
        }
        break;  
// Pasa por todos los anhos y mes para moestrar Temperatura Min, Max, anho y mes
case 7:
    for ($anho = 2014; $anho <= 2023; $anho++) {            //Pasa por todos los anhos
        
        for ($mes = 0; $mes <= 11; $mes++){                     //Pasa por todos los meses
        
           if ($matriz[$anho][$mes] < $minTemp ){               //Para establecer los acumuladores MinTemp
               $minTemp = $matriz[$anho][$mes];
               $anhoMin = $anho;
               $mesMin = $meses[$mes];
             }    
             if($matriz[$anho][$mes] > $maxTemp ){              //Para establecer los acumuladores MaxTemp
               $maxTemp = $matriz[$anho][$mes];
               $anhoMax = $anho;
               $mesMax = $meses[$mes];
             }   
            }
            }
        echo "Temperatura Maxima \n";
        echo "Max Temp: " . $maxTemp . "°C\n";
        echo "Anho: ". $anhoMax . "\n";
        echo "Mes: ". $mesMax . "\n";
        echo "Temperatura Minima \n";
        echo "Min Temp: " . $minTemp . "°C\n";
        echo "Anho: ". $anhoMin . "\n";
        echo "Mes: ". $mesMin . "\n";
        break;
// Muestra las temperaturas en primavera
case 8:
    $primavera = $matriz;
    echo "Temperaturas en primavera: " . "\n";
    echo "Anho OCT   NOV   DIC \n";
    
    for ($anho = 2014; $anho <= 2023; $anho++){
      echo $anho . " ";
      for ($mes = 9; $mes <= 11; $mes++){
        echo $primavera[$anho][$mes]."°C" . "  ";
      }
      echo "\n";
    }
    break;
// Muestra los ultimos 5 anhos de temperatura en invierno
case 9:
    $invierno = $matriz;
    echo "Temperaturas en invierno: " . "\n";
    echo "Anho JUL   AGOS  SEP " . "\n";
  for ($anho = 2019; $anho <= 2023; $anho++){
    echo $anho . " ";
    for ($mes = 6; $mes < 9; $mes++){
      echo $invierno[$anho][$mes]."°C" . "  ";
    }
    echo "\n";
  }
  break;
// Mostrar Matriz Asociativa
case 10:
  //Cargando Primavera e Inverno de la matriz actual
                         
    $asociativo = [ 
        "completa" => $matriz,
        "Primavera" => $primavera,
        "Invierno" => $invierno
       ];
    echo "Anho ENE   FEB   MAR   ABR   MAY   JUN   JUL   AGO   SEP   OCT   NOV   DIC \n"; //Se imprime la matriz completa en pantalla
       for ($anho = 2014; $anho <= 2023; $anho++) {                                       //Pasa por todos los anhos
       echo $anho . " ";                                                                  //Imprime el anho
       for ($mes = 0; $mes <= 11; $mes++){                                                //Pasa por todos los meses
          echo $asociativo["completa"][$anho][$mes]."°C" . "  ";                          //Imprime las temperaturas
       }
       echo "\n"; //Salto de linea
    }
        echo "Primavera " . "\n";
        echo "Anho OCT   NOV   DIC \n";
           for ($anho = 2014; $anho <= 2023; $anho++){                             //Pasa por todos los anhos
                echo $anho . " ";                                                  //Imprime el anho
                      for ($mes = 9; $mes <= 11; $mes++) {                         //Pasa por los meses OCT-NOV-DIC
                       echo $asociativo["Primavera"][$anho][$mes]."°C" . "  ";     //Imprime las temperaturas
           }
           echo "\n"; //Salto de linea
    }
        echo "invierno: " . "\n";
        echo "Anho JUL   AGOS  SEP " . "\n";
       
         for ($anho = 2019; $anho <= 2023; $anho++){                   //Pasa por todos los anhos
         echo $anho . " ";                                             //Imprime el anho
         for ($mes = 6; $mes <= 8 ; $mes++){                           //Pasa por los meses JUL-AGOS-SEP
           echo $asociativo["Invierno"][$anho][$mes]."°C" . "  ";      //Imprime las temperaturas
         }
         echo "\n"; //Salto de linea
         }
    break;
// Salir
case 11:
 
  $continuar = false;    // Si eligen opcion 11, se termina el repetir xq continuar true se vuelve false

}

//Do while / Repetir
} while ($continuar);



// MODULOS
// MODULO CalcularPromedio
function calcularPromedio ($mes, $matriz) {
    
    $promedio = 0;
    $totalDecada = 0;
    if ($mes >= 0 && $mes <= 11) {
      for ($anio = 2014; $anio <= 2023; $anio++){
         $totalDecada += $matriz[$anio][$mes];
      }
     $promedio = $totalDecada / 12;
     }
   return $promedio;
   }
//  MODULO CARGA MANUAL
function cargarDatosManual () {
  $matrizManual = [];      
      //Nombre de los meses
      $meses = [
          0 => "enero", 1 => "febrero",2 => "marzo",3 => "abril",4 => "mayo",5 => "junio",
          6 => "julio",7 => "agosto",8 => "septiembre",9 => "octubre",10 => "noviembre",11 => "diciembre",
          ];
          // PARA = pasa por anho y por mes, pidiendo la temperatura para cada anho y mes
          for ($anho = 2014; $anho <= 2023; $anho++) {
              for ($mes = 0; $mes <= 11; $mes++){
              echo "Ingrese la temperatura del anho " . $anho . " del mes de " . $meses[$mes] . ": ";
              $matrizManual[$anho][$mes] = trim(fgets(STDIN));
              }  
            }
            return $matrizManual; // Retorna a Matriz Manual
          }
// MODULO CARGA AUTOMATICA
function cargarDatosAuto () {
  $matrizAuto =  [                                    
      2014 => [30, 28 ,26 ,22 ,18 ,12 ,10, 14, 17, 20, 25, 29],
      2015 => [33, 30, 27, 22, 19 ,13 ,11 ,15 ,18 ,21, 26 ,31],
      2016 => [34, 32 ,29 ,21 ,18 ,14 ,12 ,16 ,18 ,21 ,27 ,32],
      2017 => [33 ,31 ,28 ,22, 18 ,13 ,11 ,14 ,17 ,22 ,26 ,31],
      2018 => [32 ,30 ,28 ,22, 17 ,12 ,9 ,13 ,16 ,20 , 24 ,30],
      2019 => [32 ,30 ,27 ,23, 19 ,14 ,12 ,11 ,17 ,23 ,25 ,29],
      2020 => [31 ,29 ,28 ,21, 19 ,13 ,10 ,12 ,16 ,22 ,27 ,29],
      2021 => [30 ,28 ,26 ,20, 16 ,12 ,11 ,13 ,17 ,21 ,28 ,30],
      2022 => [31 ,29 ,27 ,21, 17 ,12 ,11 ,15 ,18 ,22 ,26 ,30],
      2023 => [32 ,30 ,27 ,20, 16 ,13 ,13 ,15 ,19 ,23 ,28 ,31],
    ];
    return $matrizAuto; // Retorna a Matriz Auto
}

