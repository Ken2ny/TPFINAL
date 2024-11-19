<?php

function CargarDatos($modo = "auto"){

if ($modo == "auto") {
$matrizAuto = array(
  "2014" => array("enero" => 30, "febrero" =>28 ,"marzo" =>26 ,"abril" =>22,"mayo" =>18 ,"junio" =>12 ,"julio" =>10 ,"agosto" =>14,"septiembre" =>17 ,"octubre" => 20 ,"noviembre" => 25 ,"diciembre" => 29),
  "2015" => array("enero" => 33, "febrero" =>30 ,"marzo" =>27 ,"abril" =>22,"mayo" =>19 ,"junio" =>13 ,"julio" =>11 ,"agosto" =>15 ,"septiembre" =>18 ,"octubre" =>21 ,"noviembre" => 26 ,"diciembre" =>31),
  "2016" => array("enero" => 34, "febrero" =>32 ,"marzo" =>29 ,"abril" =>21,"mayo" =>18 ,"junio" =>14 ,"julio" =>12 ,"agosto" =>16 ,"septiembre" =>18 ,"octubre" =>21 ,"noviembre" =>27 ,"diciembre" =>32),
  "2017" => array("enero" => 33 ,"febrero" =>31 ,"marzo" =>28 ,"abril" =>22,"mayo" =>18 ,"junio" =>13 ,"julio" =>11 ,"agosto" =>14 ,"septiembre" =>17 ,"octubre" =>22 ,"noviembre" =>26 ,"diciembre" =>31),
  "2018" => array("enero" => 32 ,"febrero" =>30 ,"marzo" =>28 ,"abril" =>22,"mayo" =>17 ,"junio" =>12 ,"julio" =>9  ,"agosto" =>13 ,"septiembre" =>16 ,"octubre" =>20 ,"noviembre" => 24 ,"diciembre" =>30),
  "2019" => array("enero" => 32 ,"febrero" =>30 ,"marzo" =>27 ,"abril" =>23,"mayo" =>19 ,"junio" =>14 ,"julio" =>12 ,"agosto" =>11 ,"septiembre" =>17 ,"octubre" =>23 ,"noviembre" =>25 ,"diciembre" =>29),
  "2020" => array("enero" => 31 ,"febrero" =>29 ,"marzo" =>28 ,"abril" =>21,"mayo" =>19 ,"junio" =>13 ,"julio" =>10 ,"agosto" =>12 ,"septiembre" =>16 ,"octubre" =>22 ,"noviembre" =>27 ,"diciembre" =>29),
  "2021" => array("enero" => 30 ,"febrero" =>28 ,"marzo" =>26 ,"abril" =>20,"mayo" =>16 ,"junio" =>12 ,"julio" =>11 ,"agosto" =>13 ,"septiembre" =>17 ,"octubre" =>21 ,"noviembre" =>28 ,"diciembre" =>30),
  "2022" => array("enero" => 31 ,"febrero" =>29 ,"marzo" =>27 ,"abril" =>21,"mayo" =>17 ,"junio" =>12 ,"julio" =>11 ,"agosto" =>15 ,"septiembre" =>18 ,"octubre" =>22 ,"noviembre" =>26 ,"diciembre" =>30),
  "2023" => array("enero" => 32 ,"febrero" =>30 ,"marzo" =>27 ,"abril" =>20,"mayo" =>16 ,"junio" =>13 ,"julio" =>13 ,"agosto" =>15 ,"septiembre" =>19 ,"octubre" =>23 ,"noviembre" =>28 ,"diciembre" =>31),
);
return $matrizAuto;

} elseif ($modo == "manual"){ 
    $matrizManual = [];      
    for ($anho = 2014; $anho <= 2023; $anho++) {
          for ($mes = 0; $mes <= 11; $mes++){
          echo "Ingrese la temperatura del anho " . $anho . " del mes de " . [$mes] . ": ";
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