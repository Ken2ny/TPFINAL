<?php
// Modulo "CargarDatos" (String $modo) RETORNA 
function CargarDatos($modo = "auto"){
   
if ($modo == "auto") {        //Modo Auto = Carga los datos automaticos 
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
} elseif ($modo == "manual"){        //Modo Manual = Carga los datos manuales 1 x 1
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
          echo "Anho ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n"; // Imprime un texto con el anho y los meses
         for ($anho = 2014; $anho <= 2023; $anho++) {        // PARA = pasa por anho, escribiendo en fila anho x anho
         echo $anho . " ";
              
              for ($mes = 0; $mes <= 11; $mes++){           // PARA = pasa por mes, escribiendo la temperatura 
              echo $matrizManual[$anho][$mes] . "  "; 
            }
                 echo "\n";       //Salto de linea
            }
    }
return $matrizManual; // Retorna a Matriz Manual
}


//ALGORITMO
$meses = [
    0 => "enero", 1 => "febrero",2 => "marzo",3 => "abril",4 => "mayo",5 => "junio",
    6 => "julio",7 => "agosto",8 => "septiembre",9 => "octubre",10 => "noviembre",11 => "diciembre",
    ];
//Acumuladores
$maxTemp = -99999;           //Acumulador Maxima temperatura
$minTemp = 99999;            //Acumulador Minima temperatura
$anhoMaxTemp = " ";          //Acumulador AnhoMaxTemp se anota el anho con mayor temp
$mesMaxTemp = " ";           //Acumulador mesMaxTemp se anota el mes con mayor temp
$mesMinTemp = " ";           //Acumulador mesMinTemp se anota el mes con menor temp
$anhoMinTemp = " ";          //Acumulador anhoMinTemp se anota el anho con menor temp

echo "de que modo desea cargar los datos? (auto/manual)";      //Solicitamos si queremos cargar automatico o manual
$modo = trim(fgets(STDIN));                                    //Ingresamos
$matriz = CargarDatos($modo);                                  //la matriz se carga en base al modulo que ingresamos, asi haciendo que vuelva la matriz auto o manual
  

echo "Anho ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n"; //Se imprime la matriz completa en pantalla
         for ($anho = 2014; $anho <= 2023; $anho++) {            //Pasa por todos los anhos
         echo $anho . " ";
         for ($mes = 0; $mes <= 11; $mes++){                     //Pasa por todos los meses
            echo $matriz[$anho][$mes] . "  "; 
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
        }
        echo "\n";
        }
//
// TEMPERATURA DE UN ANHO Y MES               
echo "desea ver la temperatura de algun anho y mes en especificio? (s/n)";
$espec = trim(fgets(STDIN));


if($espec == "s" || $espec == "S") {
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
}
//
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
   echo $matriz[$anho][$mes] . "  ";
   }
   echo "\n";
} else {
    echo "anho no valido";
}
}
//
// TEMPERATURA UN MES X ANHO + PROMEDIO
echo  "desea ver la temperatura de un mes en cada anho??(s/n)";
$tempMes = trim(fgets(STDIN));
   
            if ($tempMes == "s" || $tempMes == "S"){
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
              }
//
// TEMPERATURAS PRIVAMERA
echo "Quiere ver las temperaturas de primavera(OCT-NOV-DIC)?";
$tresmeses = trim(fgets(STDIN));

if ($tresmeses == "s"){ 

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
}
//
//Ultimos 5 anhos de invierno
echo "desea ver los datos de los ultimos 5 anhos de invierno??(s/n)";
  $thremeses = trim(fgets(STDIN));

  if ($thremeses == "s"){
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

function ultimosanhos () { 
$invierno = array(
  "2019" => array( "julio" => 12, "agosto" => 11, "septiembre" => 17),
  "2020" => array( "julio" => 10, "agosto" => 12, "septiembre" => 16),
  "2021" => array( "julio" => 11, "agosto" => 13, "septiembre" => 17),
  "2022" => array( "julio" => 11, "agosto" => 15, "septiembre" => 18),
  "2023" => array( "julio" => 13, "agosto" => 15, "septiembre" => 19),
  );
  return $invierno;
}











   
   