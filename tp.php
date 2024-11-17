<?php



// MODULO CargaDatosAutomatico
function CargaDatosAutomatico($anho, $mes) {
$matrizAuto = [ 
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
}
//Los nombres de los meses
$meses = [
  0 => "enero", 1 => "febrero",2 => "marzo",3 => "abril",4 => "mayo",5 => "junio",
  6 => "julio",7 => "agosto",8 => "septiembre",9 => "octubre",10 => "noviembre",11 => "diciembre",
  ];

//Empieza el ALGORITMO
$maxTemp = 0;
$minTemp = 0;
$mnhoMaxTemp = " ";
$mesMaxTemp = " ";

echo "desea cargar los datos automaticamente? (sí/no)";
$datos = trim(fgets(STDIN));

if ($datos == "sí") { 
     $matrizAuto = CargaDatosAutomatico($anho, $mes);
     echo "Año ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n";
         for ($anho = 2014; $anho <= 2023; $anho++) {
         echo $anho . " ";
              for ($mes = 0; $mes <= 11; $mes++){
              echo $matrizAuto[$anho][$mes] . "  ";
              }
                 echo "\n";
              }
// TEMPERATURA DE UN ANHO Y MES               
              function mostrarTemperaturaEsp($temperaturas, $anho, $mes) {
    if (isset($temperaturas[$anho][$mes])) {
        echo "La temperatura de $mes de $anho es: " . $temperaturas[$anho][$mes] . " °C\n";
    } else {
        echo "No hay datos para $mes de $anho.\n";
    }
}
// TEMPERATURA TODO UN ANHO     
function mostrarTemperaturaAnho($temperaturas, $anho, $mes) {
      if (isset($temperaturas[$anho])) {
          echo "Temperaturas de todos los meses de $anho:\n";
      foreach ($temperaturas[$anho] as $mes => $temperatura) {
            echo "  $mes: $temperatura °C\n";
        }
    } else {
        echo "No hay datos para el año $anho.\n";
    }
  
// TEMPERATURA MES X CADA ANHO
  function mostrarTemperaturaMes($temperaturas, $mes) {
           if ($mes >= 0 && $mes <=12){
            for ($anho = 2014; $anho <= 2023; $anho++){
            echo "La temperatura en " . $anho  . " de: " . $meses[$mes] . " es: " . ($matrizAuto[$anho][$mes]) . " \n";
            $promedio = CalcularPromedio($anho, $mes);
             }
             echo "El promedio de " . $meses[$mes] . " es " . $promedio . "\n"
 
                  }
  }
// Acumuladores de MAX TEMP + MIN + MES + ANHO
if ($maxTemp> );
 // EMPIEZA LA MATRIZ MANUAL
  } else {
    $maxTemp = 0;
    $minTemp = 0;
    $anhoMaxTemp = " ";
    $mesMaxTemp = " ";
    
    
    
    echo "entonces cargaremos los datos manualmente \n";
      $matrizManual = [];      
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
                echo "\n";
              }
// TEMPERATURA DE UN ANHO Y MES
              echo "desea ver la temperatura de algun anho y mes en especificio? (s/n)";
              $especifico = trim(fgets(STDIN));
              
              
              if($especifico == "s" || $especifico == "S") {
                echo "ingrese el anho: ";
                $anho = trim(fgets(STDIN));
                echo "ingrese el mes(1-12): ";
                $mes = trim(fgets(STDIN)) - 1; 
               
                if(($anho >= 2014)&&($anho <= 2023)) {
                 if (($mes >= 0)&&($mes <= 11)){     
                       echo "la temperatura del anho: " . $anho . " del mes: " . $meses[$mes] . " es: " . ($matrizManual[$anho][$mes]);
                 } else {
                       echo "El mes ingresado no es valido";
                 }
                 } else {
                        echo "El anho ingresado no es valido";
                 }
             
            } else {
// TEMPERATURA TODO UN ANHO                   
              echo "desea ver las temperaturas de todo un anho??(s/n)";
                    $anual = trim(fgets(STDIN));
  
                   if($anual == "s" || "S") {
                   echo "ingrese el anho: ";
                   $anho = trim(fgets(STDIN));
                   
                   if ($anho >= 2014 && $anho <= 2023){ 
                      echo "la temperatura de todo el anho: " . $anho . "\n";
                      echo "ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n";
                      for ($mes = 0; $mes <= 11; $mes++){ 
                       echo ($matrizManual[$anho][$mes]) . "  ";
                       }
                      
                  }
             } else { 
// TEMPERATURA UN MES X ANHO + PROMEDIO
                   echo  "desea ver la temperatura de un mes en cada anho??(s/n)";
                   $tempMes = trim(fgets(STDIN));
   
                   if ($tempMes == "s" || $tempMes == "S"){
                   echo "Ingrese el mes(1-12): ";
                   $mes = trim(fgets(STDIN)) - 1;
       
                  if ($mes >= 0 && $mes <=12){
                  for ($anho = 2014; $anho <= 2023; $anho++){
                  echo "La temperatura en " . $anho  . " de: " . $meses[$mes] . " es: " . ($matrizAuto[$anho][$mes]) . " \n";
                  $promedio = CalcularPromedio($anho, $mes);               
  }  echo "El promedio de " . $meses[$mes] . " es " . $promedio . "\n";
  }             
  }
                
               
              }
             }
  }


      
// CalcularPromedio
function CalcularPromedio ($anho, $mes) {
 $promedio = 0;
 $TotalDecada = 0;
 if ($mes >= 0 && $mes <= 12) {
   for ($anho = 2014; $anho <= 2023; $anho++){
      $TotalDecada += $mes;
   }
  $promedio = $TotalDecada / 12;
  }
return $promedio;
}
