<?php



// MODULO CargaDatosAutomatico
function CargaDatosAutomatico() {
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
$maxTemp = -99999;
$minTemp = 99999;
$anhoMaxTemp = " ";
$mesMaxTemp = " ";
$mesMinTemp = " ";
$anhoMinTemp = " ";

echo "desea cargar los datos automaticamente? (s/n)";
$datos = trim(fgets(STDIN));

if ($datos == "s" || $datos == "S") { 
     $matrizAuto = CargaDatosAutomatico ();
     
     echo "Anho ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n";
         for ($anho = 2014; $anho <= 2023; $anho++) {
         echo $anho . " ";
              
              for ($mes = 0; $mes <= 11; $mes++){
              echo $matrizAuto[$anho][$mes] . "  "; 
              
              if ($matrizAuto[$anho][$mes] > $maxTemp ){
                $maxTemp = $matrizAuto[$anho][$mes];
                $anhoMaxTemp = $anho;
                $mesMaxTemp = $meses[$mes];
              }
              if ($matrizAuto[$anho][$mes] < $minTemp ){
                $minTemp = $matrizAuto[$anho][$mes];
                $anhoMinTemp = $anho;
                $mesMinTemp = $meses[$mes];
              }  
            }
                 echo "\n";
            }
              
        
// TEMPERATURA DE UN ANHO Y MES               
              echo "desea ver la temperatura de algun anho y mes en especificio? (s/n)";
              $espec = trim(fgets(STDIN));
              
              
              if($espec == "s" || $espec == "S") {
                echo "ingrese el anho: ";
                $anho = trim(fgets(STDIN));
                echo "ingrese el mes(1-12): ";
                $mes = trim(fgets(STDIN)) - 1; 
               
                if(($anho >= 2014)&&($anho <= 2023)) {
                 if (($mes >= 0)&&($mes <= 11)){     
                       echo "la temperatura del anho: " . $anho . " del mes: " . $meses[$mes] . " es: " . ($matrizAuto[$anho][$mes]);
                 }
              } else {
                  echo "Los datos que ingreso, no son validos";
              } 
            } else { 
// TEMPERATURA TODO UN ANHO                 
              echo "desea ver las temperaturas de todo un anho??(s/n)";
                  $anual = trim(fgets(STDIN));

                 if ($anual == "s") {
                 echo "ingrese el anho: ";
                 $anho = trim(fgets(STDIN));
                 
                 if ($anho >= 2014 && $anho <= 2023){ 
                    echo "la temperatura de todo el anho: " . $anho . "\n";
                    echo "ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n";
                    for ($mes = 0; $mes <= 11; $mes++){ 
                     echo ($matrizAuto[$anho][$mes]) . "  ";
                     }
                  }
                } else { 
// TEMPERATURA MES X CADA ANHO
                  echo  "desea ver la temperatura de un mes en cada anho??(s/n)";
                  $tempMes = trim(fgets(STDIN));
                     
                  if ($tempMes == "s" || $tempMes == "S"){
                         echo "Ingrese el mes(1-12): ";
                         $mes = trim(fgets(STDIN)) - 1;
                         
                  if ($mes >= 0 && $mes <=11){
                  for ($anho = 2014; $anho <= 2023; $anho++){
                    echo "La temperatura en " . $anho  . " de: " . $meses[$mes] . " es: " . ($matrizAuto[$anho][$mes]) . " \n";
                    }
                    $promedio = CalcularPromedio($anho, $mes);
                    echo "El promedio de " . $meses[$mes] . " es " . $promedio . "\n";
                    } else {
                      echo "mes no valido";
                    }
                    }

                  }
                }
// TEMPERATURAS PRIVAMERA
                echo "Quiere ver las temperaturas de primavera(OCT-NOV-DIC)?";
                $tresmeses = trim(fgets(STDIN));

                if ($tresmeses == "s" || $tresmeses == "S"){ 
               
                $primavera = [9, 10, 11];
                echo "Las temperaturas de primavera son: " . "\n";
                echo "Anho OCT NOV DIC \n";

                for ($anho = 2014; $anho <= 2023; $anho++){
                  echo $anho . " ";
                  foreach ($primavera as $mes){
                    echo $matrizAuto[$anho][$mes] . "  ";
                  }
                  echo "\n";
                }
                  

                
// EMPIEZA LA MATRIZ MANUAL
 } else { 
  echo "desea ver los datos de los ultimos 5 anhos de invierno??(s/n)";
  $thremeses = trim(fgets(STDIN));

  if ($thremeses == "s"){
  $invierno = [6, 7, 8];
  echo "La temperaturas de invierno: " . "\n";
  echo "Anho JUL AGOS SEP";
for ($anho = 2019; $anho <= 2023; $anho++){
  echo $anho . " ";
  foreach ($invierno as $mes){
    echo $matrizAuto[$anho][$mes] . "  ";
  }
  echo "\n";
}
}
}
} else {
  
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
                
                if ($matrizManual[$anho][$mes] < $minTemp ){
                  $minTemp = $matrizManual[$anho][$mes];
                  $anhoMinTemp = $anho;
                  $mesMinTemp = $meses [$mes];
                }    
                if($matrizManual[$anho][$mes] > $maxTemp ){
                  $maxTemp = $matrizManual[$anho][$mes];
                  $anhoMaxTemp = $anho;
                  $mesMaxTemp = $meses[$mes];
                }   
              }
                echo "\n";
              }
              
              
// TEMPERATURA DE UN ANHO Y MES
    echo "desea ver la temperatura de algun anho y mes en especificio? (s/n) \n";
    $espec = trim(fgets(STDIN));
        
    if($espec == "s" || $espec == "S") {
        
      echo "ingrese el anho: ";
       $anho = trim(fgets(STDIN));
      echo "ingrese el mes(1-12): ";
       $mes = trim(fgets(STDIN)) - 1; 
        
        if($anho >= 2014 &&$anho <= 2023) {
         if ($mes >= 0 && $mes <= 11){     
            echo "la temperatura del anho: " . $anho . " del mes: " . $meses[$mes] . " es: " . ($matrizManual[$anho][$mes]) . "\n";
            } else {
              echo "el mes no es valido";
            }
    
        } else {
          echo "el anho no es validos";
        }
             
    }
// TEMPERATURA TODO UN ANHO                   
echo "desea ver las temperaturas de todo un anho??(s/n)";
$anual = trim(fgets(STDIN));
  
        if($anual == "s" || $anual == "S") {
        
            echo "ingrese el anho: ";
            $anho = trim(fgets(STDIN));
                   
            if ($anho >= 2014 && $anho <= 2023){ 
                
                echo "la temperatura de todo el anho: " . $anho . "\n";
                echo "ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n";
                
                for ($mes = 0; $mes <= 11; $mes++){ 
                       echo ($matrizManual[$anho][$mes]) . "  ";
                }
                }
        }
// TEMPERATURA UN MES X ANHO + PROMEDIO
echo  "desea ver la temperatura de un mes en cada anho??(s/n)";
$tempMes = trim(fgets(STDIN));
   
            if ($tempMes == "s" || $tempMes == "S"){
                echo "Ingrese el mes(1-12): ";
                $mes = trim(fgets(STDIN)) - 1;
       
                if ($mes >= 0 && $mes <=11){
                for ($anho = 2014; $anho <= 2023; $anho++){
                    echo "La temperatura en " . $anho  . " de: " . $meses[$mes] . " es: " . ($matrizManual[$anho][$mes]) . " \n";
                                 }
                $promedio = CalcularPromedio($anho, $mes);   
                echo "El promedio de " . $meses[$mes] . " es " . $promedio . "\n";
                } else {
                  echo "mes no valido";
                }             
              }
        }
        echo "Quiere ver las temperaturas de primavera(OCT-NOV-DIC)?";
                $tresmeses = trim(fgets(STDIN));

                if ($tresmeses == "s"){ 
               
                $primavera = [9, 10, 11];
                echo "Las temperaturas de primavera son: " . "\n";
                echo "Anho OCT NOV DIC \n";

                for ($anho = 2014; $anho <= 2023; $anho++){
                  echo $anho . " ";
                  foreach ($primavera as $mes){
                    echo $matrizManual[$anho][$mes] . "  ";
                  }
                  echo "\n";
                }
    }

// Salida Acumuladores
echo "La MaxTemp es: " . $maxTemp . "\n";
echo "El anho con la MaxTemp es: " . $anhoMaxTemp . "\n";
echo "El mes con la MaxTemp es: " . $mesMaxTemp . "\n";
echo "La MinTemp es: " . $minTemp . "\n";
echo "El anho con la MinTemp es: " . $anhoMinTemp . "\n";
echo "El mes con la MinTemp es: " . $mesMinTemp . "\n";
      
// CalcularPromedio
function CalcularPromedio ($anho, $mes) {
  $promedio = 0;
  $totalDecada = 0;
  if ($mes >= 0 && $mes <= 11) {
    for ($anho = 2014; $anho <= 2023; $anho++){
       $totalDecada += $mes;
    }
   $promedio = $totalDecada / 12;
   }
 return $promedio;
 }
