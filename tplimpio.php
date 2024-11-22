<?php

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

function CargarDatosAuto () {
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
function CargarDatosManual () {
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
case 1:
    $matriz = CargarDatosAuto();
    echo "Datos cargados \n";
    break;
case 2:
    $matriz = CargarDatosManual();
    echo "Datos cargados \n";
    break;
case 3:
    echo "Anho ENE FEB MAR ABR MAY JUN JUL AGO SEP OCT NOV DIC \n"; // Imprime un texto con el anho y los meses
    for ($anho = 2014; $anho <= 2023; $anho++) {        // PARA = pasa por anho, escribiendo en fila anho x anho
    echo $anho . " ";
         
         for ($mes = 0; $mes <= 11; $mes++){           // PARA = pasa por mes, escribiendo la temperatura 
         echo $matriz[$anho][$mes] . "  "; 
       }
            echo "\n";       //Salto de linea
       }
       break;
case 4:

case 5:

case 6:

case 7:

case 8:

case 9:

case 10:

case 11:

    $continuar = false;

}

} while ($continuar);