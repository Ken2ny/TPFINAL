<?php 

 //Nombre de los meses
$meses = [
    0 => "enero", 1 => "febrero",2 => "marzo",3 => "abril",4 => "mayo",5 => "junio",
    6 => "julio",7 => "agosto",8 => "septiembre",9 => "octubre",10 => "noviembre",11 => "diciembre",
    ];

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
    
    return $matrizManual;
        }



do {
    $maxTemp = -99999;           //Acumulador Maxima temperatura
    $minTemp = 99999;            //Acumulador Minima temperatura
    $anhoMaxTemp = " ";          //Acumulador AnhoMaxTemp se anota el anho con mayor temp
    $mesMaxTemp = " ";           //Acumulador mesMaxTemp se anota el mes con mayor temp
    $mesMinTemp = " ";           //Acumulador mesMinTemp se anota el mes con menor temp
    $anhoMinTemp = " ";          //Acumulador anhoMinTemp se anota el anho con menor temp
    $continuar = true;
  
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

echo "Ingrese opcion(1-11)";
$opcion = trim(fgets(STDIN));

switch($opcion) {
// CargaDatosAutomatico
case 1: 
    $matrizAuto = CargarDatosAuto();
    echo "Datos Cargados \n";
    break;
// CargaDatosManual
case 2:
    $matrizManual = CargarDatosManual(); 
    echo "Datos Cargados \n";
    break;
// Muestra la matriz cargada
case 3:
    if (isset($matrizAuto)) {
        echo "Anho ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n"; //Se imprime la matriz completa en pantalla
        for ($anho = 2014; $anho <= 2023; $anho++) {            //Pasa por todos los anhos
        echo $anho . " ";
        for ($mes = 0; $mes <= 11; $mes++){                     //Pasa por todos los meses
           echo $matrizAuto[$anho][$mes] . "  "; 
       }
       echo "\n";
       }
       break;
    } else
    if(isset($matrizManual)) {
        echo "Anho ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n"; //Se imprime la matriz completa en pantalla
         for ($anho = 2014; $anho <= 2023; $anho++) {            //Pasa por todos los anhos
         echo $anho . " ";
         for ($mes = 0; $mes <= 11; $mes++){                     //Pasa por todos los meses
            echo $matrizManual[$anho][$mes] . "  "; 
        }
        echo "\n";
        }
        break; 
    }
// Muestra la temperatura del anho y mes
case 4:
    
    
    if (isset($matrizAuto)){
        echo "ingrese el anho: ";              //Ingresamos el anho
        $anho = trim(fgets(STDIN));
        echo "ingrese el mes(1-12): ";         //Ingresamos el mes, del 1 a 12
        $mes = trim(fgets(STDIN)) - 1;         //Al numero ingresado se le resta 1 porque las array empiezan de 0
        
    
        if($anho >= 2014 && $anho <= 2023) {                   //Pasa por todos los anhos
        if ($mes >= 0 && $mes <= 11){                          //Valida si el mes esta entre 0 y 11
             echo "la temperatura del anho: " . $anho . " del mes: " . $meses[$mes] . " es: " . $matrizAuto[$anho][$mes] . "\n";     // Imprime la salida
             
            } else {
        echo "mes no valido \n";
        }
        } else {
        echo "anho no valido \n";
        } 
        break;
    } else if (isset($matrizManual)){
        echo "ingrese el anho: ";              //Ingresamos el anho
        $anho = trim(fgets(STDIN));
        echo "ingrese el mes(1-12): ";         //Ingresamos el mes, del 1 a 12
        $mes = trim(fgets(STDIN)) - 1;         //Al numero ingresado se le resta 1 porque las array empiezan de 0
        
    
        if($anho >= 2014 && $anho <= 2023) {                   //Pasa por todos los anhos
        if ($mes >= 0 && $mes <= 11){                          //Valida si el mes esta entre 0 y 11
             echo "la temperatura del anho: " . $anho . " del mes: " . $meses[$mes] . " es: " . $matrizManual[$anho][$mes] . "\n";     // Imprime la salida
             
            } else {
        echo "mes no valido \n";
        }
        } else {
        echo "anho no valido \n";
        } 
    break;
    }

// Muestra la temperatura de todo un anho
case 5:
    
    if (isset($matrizAuto)){
        echo "ingrese el anho: ";
        $anho = trim(fgets(STDIN));
    
            if ($anho >= 2014 && $anho <= 2023){ 
            echo "la temperatura de todo el anho: " . $anho . "\n";
            echo "ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n";
                for ($mes = 0; $mes <= 11; $mes++){ 
                echo $matrizAuto[$anho][$mes] . "  ";
            }
            echo "\n";
        } else {
         echo "anho no valido \n";
        }

    } else if (isset($matrizMan)){
      
    
    echo "ingrese el anho: ";
    $anho = trim(fgets(STDIN));

        if ($anho >= 2014 && $anho <= 2023){ 
        echo "la temperatura de todo el anho: " . $anho . "\n";
        echo "ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n";
            for ($mes = 0; $mes <= 11; $mes++){ 
            echo $matrizManual[$anho][$mes] . "  ";
        }
        echo "\n";
    } else {
     echo "anho no valido \n";
    }
}
    break;
// Muestra la temperatura de un solo mes durante los anhos  y el promedio
case 6:
    if ($matrizAuto){
        echo "Ingrese el mes(1-12): ";
        $mes = trim(fgets(STDIN)) - 1;
           
            if ($mes >= 0 && $mes <=11){
                for ($anho = 2014; $anho <= 2023; $anho++){
                    echo "La temperatura en " . $anho  . " de: " . $meses[$mes] . " es: " . $matrizAuto[$anho][$mes] . "\n";    
                    }
                    $promedio = CalcularPromedio($anho, $mes);   
                    echo "El promedio de " . $meses[$mes] . " es " . $promedio . "\n";
            } else {
                      echo "datos no valido \n";
            }     
    } else if ($matrizManual){
        echo "Ingrese el mes(1-12): ";
        $mes = trim(fgets(STDIN)) - 1;
           
            if ($mes >= 0 && $mes <=11){
                for ($anho = 2014; $anho <= 2023; $anho++){
                    echo "La temperatura en " . $anho  . " de: " . $meses[$mes] . " es: " . $matrizManual[$anho][$mes] . "\n";    
                    }
                    $promedio = CalcularPromedio($anho, $mes);   
                    echo "El promedio de " . $meses[$mes] . " es " . $promedio . "\n";
            } else {
                      echo "datos no valido \n";
            }     
    }
    break;     
// Pasa por todos los anhos y mes para moestrar Temperatura Min, Max, anho y mes
case 7:
    if ($matrizAuto){
        for ($anho = 2014; $anho <= 2023; $anho++) {            //Pasa por todos los anhos
        
            for ($mes = 0; $mes <= 11; $mes++){                     //Pasa por todos los meses
            
               if ($matrizAuto[$anho][$mes] < $minTemp ){               //Para establecer los acumuladores MinTemp
                   $minTemp = $matrizAuto[$anho][$mes];
                   $anhoMinTemp = $anho;
                   $mesMinTemp = $meses[$mes];
                 }    
                 if($matrizAuto[$anho][$mes] > $maxTemp ){              //Para establecer los acumuladores MaxTemp
                   $maxTemp = $matrizAuto[$anho][$mes];
                   $anhoMaxTemp = $anho;
                   $mesMaxTemp = $meses[$mes];
                 }   
                }
        }
        echo "La MaxTemp es: " . $maxTemp . "\n";
        echo "El anho con la MaxTemp es: " . $anhoMaxTemp . "\n";
        echo "El mes con la MaxTemp es: " . $mesMaxTemp . "\n";
        echo "La MinTemp es: " . $minTemp . "\n";
        echo "El anho con la MinTemp es: " . $anhoMinTemp . "\n";
        echo "El mes con la MinTemp es: " . $mesMinTemp . "\n";
    } else if ($matrizManual){
        for ($anho = 2014; $anho <= 2023; $anho++) {            //Pasa por todos los anhos
        
            for ($mes = 0; $mes <= 11; $mes++){                     //Pasa por todos los meses
            
               if ($matrizManual[$anho][$mes] < $minTemp ){               //Para establecer los acumuladores MinTemp
                   $minTemp = $matrizManual[$anho][$mes];
                   $anhoMinTemp = $anho;
                   $mesMinTemp = $meses[$mes];
                 }    
                 if($matrizManual[$anho][$mes] > $maxTemp ){              //Para establecer los acumuladores MaxTemp
                   $maxTemp = $matrizManual[$anho][$mes];
                   $anhoMaxTemp = $anho;
                   $mesMaxTemp = $meses[$mes];
                 }   
                }
        }
        echo "La MaxTemp es: " . $maxTemp . "\n";
        echo "El anho con la MaxTemp es: " . $anhoMaxTemp . "\n";
        echo "El mes con la MaxTemp es: " . $mesMaxTemp . "\n";
        echo "La MinTemp es: " . $minTemp . "\n";
        echo "El anho con la MinTemp es: " . $anhoMinTemp . "\n";
        echo "El mes con la MinTemp es: " . $mesMinTemp . "\n";
    }
    break;
// Muestra las temperaturas en primavera
case 8:
    if ($matrizAuto){
        $primavera = CargarPrimavera();
        echo "Las temperaturas de primavera son: " . "\n";
        echo "Anho OCT NOV DIC \n";
        
        for ($anho = 2014; $anho <= 2023; $anho++){
          echo $anho . " ";
          $meses = ["octubre", "noviembre", "diciembre"];
          for ($mes = 0; $mes < count($meses); $mes++) {
            echo $primavera[$anho][$meses[$mes]] . "  ";
          
          }
          echo "\n";
          }
    } else if ($matrizManual){
        $primavera = $matrizManual;
        echo "Las temperaturas de primavera son: " . "\n";
        echo "Anho OCT NOV DIC \n";
        
        for ($anho = 2014; $anho <= 2023; $anho++){
          echo $anho . " ";
          $meses = ["octubre", "noviembre", "diciembre"];
          for ($mes = 0; $mes < count($meses); $mes++) {
            echo $primavera[$anho][$meses[$mes]] . "  ";
          
          }
          echo "\n";
          }
    } 
 break;
// Muestra los ultimos 5 anhos de temperatura en invierno
case 9: 
    $matrizAuto= [];
    $matrizManual = [];
    if ($matrizAuto){
        $invierno = ultimosanhos();
  
        echo "La temperaturas de invierno: " . "\n";
        echo "Anho JUL AGOS SEP " . "\n";
      
        for ($anho = 2019; $anho <= 2023; $anho++){
        echo $anho . " ";
        $meses = ["julio", "agosto", "septiembre"];
        for ($mes = 0; $mes < count($meses); $mes++){
          echo $invierno[$anho][$meses[$mes]] . "  ";
        }
        echo "\n";
        }
    } else if ($matrizManual){
        $invierno = $matrizManual;
  
        echo "La temperaturas de invierno: " . "\n";
        echo "Anho JUL AGOS SEP " . "\n";
      
        for ($anho = 2019; $anho <= 2023; $anho++){
        echo $anho . " ";
        $meses = ["julio", "agosto", "septiembre"];
        for ($mes = 0; $mes < count($meses); $mes++){
          echo $invierno[$anho][$meses[$mes]] . "  ";
        }
        echo "\n";
        }
    }
    break;

case 10: 
    if ($matrizAuto){
        $primavera = CargarPrimavera();
        $invierno = ultimosanhos();
        $asociativo = [ 
            "completa" => $matrizAuto,
            "Primavera" => $primavera,
            "Invierno" => $invierno
           ];
           echo "Anho ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n"; //Se imprime la matriz completa en pantalla
           for ($anho = 2014; $anho <= 2023; $anho++) {            //Pasa por todos los anhos
           echo $anho . " ";
           for ($mes = 0; $mes <= 11; $mes++){                     //Pasa por todos los meses
              echo $asociativo["completa"][$anho][$mes] . "  "; 
           }
           echo "\n";
       }
           echo "Primavera " . "\n";
           echo "Anho OCT NOV DIC \n";
           for ($anho = 2014; $anho <= 2023; $anho++){
                echo $anho . " ";
                   $meses = ["octubre", "noviembre", "diciembre"];
                      for ($mes = 0; $mes < count($meses); $mes++) {  
                       echo $asociativo["Primavera"][$anho][$meses[$mes]] . "  ";
           }
           echo "\n";
       }
       echo "invierno: " . "\n";
         echo "Anho JUL AGOS SEP " . "\n";
       
         for ($anho = 2019; $anho <= 2023; $anho++){
         echo $anho . " ";
         $meses = ["julio", "agosto", "septiembre"];
         for ($mes = 0; $mes < count($meses); $mes++){
           echo $asociativo["Invierno"][$anho][$meses[$mes]] . "  ";
         }
         echo "\n";
         }
       
    } else if ($matrizManual){
        $primavera = $matrizManual;
        $invierno = $matrizManual;
       
        $asociativo = [ 
            "completa" => $matrizManual,
            "Primavera" => $primavera,
            "Invierno" => $invierno
           ];
           echo "Anho ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n"; //Se imprime la matriz completa en pantalla
           for ($anho = 2014; $anho <= 2023; $anho++) {            //Pasa por todos los anhos
           echo $anho . " ";
           for ($mes = 0; $mes <= 11; $mes++){                     //Pasa por todos los meses
              echo $asociativo["completa"][$anho][$mes] . "  "; 
           }
           echo "\n";
       }
           echo "Primavera " . "\n";
           echo "Anho OCT NOV DIC \n";
           for ($anho = 2014; $anho <= 2023; $anho++){
                echo $anho . " ";
                   $meses = ["octubre", "noviembre", "diciembre"];
                      for ($mes = 0; $mes < count($meses); $mes++) {  
                       echo $asociativo["Primavera"][$anho][$meses[$mes]] . "  ";
           }
           echo "\n";
       }
       echo "invierno: " . "\n";
         echo "Anho JUL AGOS SEP " . "\n";
       
         for ($anho = 2019; $anho <= 2023; $anho++){
         echo $anho . " ";
         $meses = ["julio", "agosto", "septiembre"];
         for ($mes = 0; $mes < count($meses); $mes++){
           echo $asociativo["Invierno"][$anho][$meses[$mes]] . "  ";
         }
         echo "\n";
         }
    }
    break;

case 11:
    $continuar = false; 
   
}



} while ($continuar);


function CalcularPromedio ($anho, $mes) {
    $matrizAuto = CargarDatosAuto();
    $promedio = 0;
    $totalDecada = 0;
    if ($mes >= 0 && $mes <= 11) {
      for ($anio = 2014; $anio <= 2023; $anho++){
         $totalDecada += $matrizAuto[$anio][$mes];
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

function CargarPrimavera (){ 
    $primavera = array(  
    "2014" => array("octubre" => 20, "noviembre" => 25, "diciembre" => 29),
    "2015" => array("octubre" => 21, "noviembre" => 26, "diciembre" => 31),
    "2016" => array("octubre" => 21, "noviembre" => 27, "diciembre" => 32),
    "2017" => array("octubre" => 22, "noviembre" => 26, "diciembre" => 31),
    "2018" => array("octubre" => 20, "noviembre" => 24, "diciembre" => 30),
    "2019" => array("octubre" => 23, "noviembre" => 25, "diciembre" => 29),
    "2020" => array("octubre" => 22, "noviembre" => 27, "diciembre" => 29),
    "2021" => array("octubre" => 21, "noviembre" => 28, "diciembre" => 30),
    "2022" => array("octubre" => 22, "noviembre" => 26, "diciembre" => 30),
    "2023" => array("octubre" => 23, "noviembre" => 28, "diciembre" => 31),
    );
    return $primavera;
    };
