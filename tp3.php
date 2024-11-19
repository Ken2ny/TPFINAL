<?php

function CargarDatos($modo = "auto"){

if ($modo == "auto") {
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
      return $matrizAuto;
} elseif ($modo == "manual"){ 
    $matrizManual = [];      
    $meses = [
        0 => "enero", 1 => "febrero",2 => "marzo",3 => "abril",4 => "mayo",5 => "junio",
        6 => "julio",7 => "agosto",8 => "septiembre",9 => "octubre",10 => "noviembre",11 => "diciembre",
        ];
    for ($anho = 2014; $anho <= 2023; $anho++) {
          for ($mes = 0; $mes <= 11; $mes++){
          echo "Ingrese la temperatura del anho " . $anho . " del mes de " . $meses[$mes] . ": ";
          $matrizManual[$anho][$mes] = trim(fgets(STDIN));
          }  
        }
          echo "Anho ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n";
          for ($anho = 2014; $anho <= 2023; $anho++){
            echo $anho . " ";
            for ($mes = 0; $mes <= 11; $mes++) {
            echo $matrizManual[$anho][$mes] . "  ";
            }
        }
    }
return $matrizManual;
}


//ALGORITMO