<?php 

function CargarDatosAuto() {

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

function CargarDatosManual() {
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
}

while (true){

echo "MENU DE OPCIONES \n";
echo "1. Cargar Datos Automaticamente";
echo "2. Cargar Datos Manualmente";
echo "3. Mostrar el contenido de matriz";
echo "4. Mostrar la temperatura de un anho y mes especifico";
echo "5. Mostrar las temperaturas de un mes de cada anho y el promedio";
echo "6. Mostrar la minima y maxima temperatura, anho y mes.";
echo "7. Mostrar matriz de primavera(oct-nov-dic) de
todos los años";
echo "8. Mostrar matriz de invierno últimos 5 años de
invierno (jul-ago-sep)";

$opcion = trim(fgets(STDIN));

switch($opcion) {
case 1: 
    $matriz = CargarDatosAuto();
    break;

case 2:
    $matriz = CargarDatosManual();
    break;

case 3:
    echo "Anho ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n"; //Se imprime la matriz completa en pantalla
         for ($anho = 2014; $anho <= 2023; $anho++) {            //Pasa por todos los anhos
         echo $anho . " ";
         for ($mes = 0; $mes <= 11; $mes++){                     //Pasa por todos los meses
            echo $matriz[$anho][$mes] . "  "; 
        }
        echo "\n";
        }
        break;

case 4:
    echo "ingrese el anho: ";              //Ingresamos el anho
    $anho = trim(fgets(STDIN));
    echo "ingrese el mes(1-12): ";         //Ingresamos el mes, del 1 a 12
    $mes = trim(fgets(STDIN)) - 1;         //Al numero ingresado se le resta 1 porque las array empiezan de 0
    $matriz = CargarDatos($modo);

    if($anho >= 2014 && $anho <= 2023) {                   //Pasa por todos los anhos
    if ($mes >= 0 && $mes <= 11){                          //Valida si el mes esta entre 0 y 11
         echo "la temperatura del anho: " . $anho . " del mes: " . $meses[$mes] . " es: " . $matriz[$anho][$mes] . "\n";     // Imprime la salida
         
        } else {
    echo "mes no valido";
    }
    } else {
    echo "anho no valido";
    } 
    break;

case 5:
    echo "ingrese el anho: ";
    $anho = trim(fgets(STDIN));

        if ($anho >= 2014 && $anho <= 2023){ 
        echo "la temperatura de todo el anho: " . $anho . "\n";
        echo "ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n";
            for ($mes = 0; $mes <= 11; $mes++){ 
            echo $matriz[$anho][$mes] . "  ";
        }
        echo "\n";
    } else {
     echo "anho no valido";
    }
    break;

case 6:
    echo "Ingrese el mes(1-12): ";
    $mes = trim(fgets(STDIN)) - 1;
       
        if ($mes >= 0 && $mes <=11){
            for ($anho = 2014; $anho <= 2023; $anho++){
                echo "La temperatura en " . $anho  . " de: " . $meses[$mes] . " es: " . $matriz[$anho][$mes] . "\n";    
                }
                $promedio = CalcularPromedio($anho, $mes);   
                echo "El promedio de " . $meses[$mes] . " es " . $promedio . "\n";
        } else {
                  echo "datos no valido";
        }             
    break;     

case 7:
    if ($matriz[$anho][$mes] < $minTemp ){               //Para establecer los acumuladores MinTemp
        $minTemp = $matriz[$anho][$mes];
        $anhoMinTemp = $anho;
        $mesMinTemp = $meses[$mes];
      }    
      if($matriz[$anho][$mes] > $maxTemp ){              //Para establecer los acumuladores MaxTemp
        $maxTemp = $matriz[$anho][$mes];
        $anhoMaxTemp = $anho;
        $mesMaxTemp = $meses[$mes];
      }   
    echo "La MaxTemp es: " . $maxTemp . "\n";
    echo "El anho con la MaxTemp es: " . $anhoMaxTemp . "\n";
    echo "El mes con la MaxTemp es: " . $mesMaxTemp . "\n";
    echo "La MinTemp es: " . $minTemp . "\n";
    echo "El anho con la MinTemp es: " . $anhoMinTemp . "\n";
    echo "El mes con la MinTemp es: " . $mesMinTemp . "\n";
    break;

case 8:
    $primavera = [];
    echo "Las temperaturas de primavera son: " . "\n";
    echo "Anho OCT NOV DIC \n";


    for ($anho = 2014; $anho <= 2023; $anho++){
        echo $anho . " ";
        for ($mes = 9; $mes <= 11; $mes++){
            echo $matriz[$anho][$mes] . "  ";
        }
    echo "\n";
    }  
    break;

case 9: 
    $invierno = [];
    echo "La temperaturas de invierno: " . "\n";
    echo "Anho JUL AGOS SEP " . "\n";
    for ($anho = 2019; $anho <= 2023; $anho++){
        echo $anho . " ";
          for ($mes = 6; $mes < 9; $mes++){
               echo $matriz[$anho][$mes] . "  ";
    }
    echo "\n";
    }
    break;



}



}









   
function CalcularPromedio ($anho, $mes) {
    $matriz = CargarDatos();
    $promedio = 0;
    $totalDecada = 0;
    if ($mes >= 0 && $mes <= 11) {
      for ($anho = 2014; $anho <= 2023; $anho++){
         $totalDecada += $matriz[$anho][$mes];
      }
     $promedio = $totalDecada / 12;
     }
   return $promedio;
   }