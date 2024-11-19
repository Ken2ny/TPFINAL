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
$anhoMaxTemp = " ";
$mesMaxTemp = " ";
$mesMinTemp = " ";
$anhoMinTemp = " ";

echo "desea cargar los datos automaticamente? (s/n)";
$datos = trim(fgets(STDIN));

if ($datos == "s" || $datos == "S") { 
     $matrizAuto = CargaDatosAutomatico($anho, $mes);
    
     echo "Anho ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n";
         for ($anho = 2014; $anho <= 2023; $anho++) {
         echo $anho . " ";
              for ($mes = 0; $mes <= 11; $mes++){
              echo $matrizAuto[$anho][$mes] . "  ";
              
              if($matrizAuto[$anho][$mes] > $maxTemp ){
                $maxTemp = $matrizAuto[$anho][$mes];
                $anhoMaxTemp = $anho;
                $mesMaxTemp = $meses[$mes];
              }  
              if ($matrizAuto[$anho][$mes] < $minTemp ){
                $minTemp = $matrizAuto[$anho][$mes];
                $anhoMinTemp = $anho;
                $mesMinTemp = $meses [$mes];
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
                         
                  if ($mes >= 0 && $mes <=12){
                  for ($anho = 2014; $anho <= 2023; $anho++){
                    echo "La temperatura en " . $anho  . " de: " . $meses[$mes] . " es: " . ($matrizAuto[$anho][$mes]) . " \n";
                    $promedio = CalcularPromedio($anho, $mes);
                    
                    }
                    echo "El promedio de " . $meses[$mes] . " es " . $promedio . "\n";
                    }
                    }
                  

 
 
 
 
                  }
                }
// EMPIEZA LA MATRIZ MANUAL
} else {
  
    echo "entonces cargaremos los datos manualmente \n";
      $matrizManual = [];      
        for ($anho = 2014; $anho <= 2023; $anho++) {
              for ($mes = 0; $mes <= 11; $mes++){
              echo "Ingrese la temperatura del anho " . $anho . " del mes de " . $meses[$mes] . ": ";
              $matrizManual[$anho][$mes] = trim(fgets(STDIN));
              if($matrizManual[$anho][$mes] > $maxTemp ){
                $maxTemp = $matrizManual[$anho][$mes];
                $anhoMaxTemp = $anho;
                $mesMaxTemp = $meses[$mes];
              }   
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
    $espec = trim(fgets(STDIN));
        
    if($espec == "s" || $espec == "S") {
        echo "ingrese el anho: ";
        $anho = trim(fgets(STDIN));
        echo "ingrese el mes(1-12): ";
        $mes = trim(fgets(STDIN)) - 1; 
               
        if(($anho >= 2014)&&($anho <= 2023)) {
         if (($mes >= 0)&&($mes <= 11)){     
            
            echo "la temperatura del anho: " . $anho . " del mes: " . $meses[$mes] . " es: " . ($matrizManual[$anho][$mes]);
            } else {
                       echo "El mes ingresado no es valido"; }
        } else {
           echo "El anho ingresado no es valido"; }
             
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
                    $promedio = CalcularPromedio($anho, $mes);               }  
                echo "El promedio de " . $meses[$mes] . " es " . $promedio . "\n";
                }             
              }
        }
    }
}
// Salida Acumuladores
echo "La MaxTemp es: " . $maxTemp . "\n";
echo "El anho con la MaxTemp es: " . $anhoMaxTemp . "\n";
echo "El mes con la MaxTemp es: " . $mesMaxTemp . "\n";

      
// CalcularPromedio
function CalcularPromedio ($anho, $mes) {
 $promedio = 0;
 $totalDecada = 0;
 if ($mes >= 0 && $mes <= 12) {
   for ($anho = 2014; $anho <= 2023; $anho++){
      $totalDecada += $mes;
   }
  $promedio = $totalDecada / 12;
  }
return $promedio;
}