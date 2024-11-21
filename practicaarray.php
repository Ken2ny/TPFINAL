<?php
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


    echo "Quiere ver las temperaturas de primavera(OCT-NOV-DIC)?";
$tresmeses = trim(fgets(STDIN));

if ($tresmeses == "s"){ 

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


echo "desea ver los datos de los ultimos 5 anhos de invierno??(s/n)";
  $thremeses = trim(fgets(STDIN));

  if ($thremeses == "s"){
  $invierno = ultimosanhos();
  
  echo "La temperaturas de invierno: " . "\n";
  echo "Anho JUL AGOS SEP " . "\n";

  for ($anho = 2019; $anho <= 2023; $anho++){
  echo $anho . " ";
  $mezes = ["julio", "agosto", "septiembre"];
  for ($mes = 0; $mes < count($mezes); $mes++){
    echo $invierno[$anho][$mezes[$mes]] . "  ";
  }
  echo "\n";
}
}



$matriz = array(
  "2014" => array("enero" => 30, "febrero" => 28, "marzo" => 26, "abril" => 22, "mayo" => 18, "junio" => 12, "julio" => 10, "agosto" => 14, "septiembre" => 17, "octubre" => 20, "noviembre" => 25, "diciembre" => 29),
  "2015" => array("enero" => 33, "febrero" => 30, "marzo" => 27, "abril" => 22, "mayo" => 19, "junio" => 13, "julio" => 11, "agosto" => 15, "septiembre" => 18, "octubre" => 21, "noviembre" => 26, "diciembre" => 31),
  "2016" => array("enero" => 34, "febrero" => 32, "marzo" => 29, "abril" => 21, "mayo" => 18, "junio" => 14, "julio" => 12, "agosto" => 16, "septiembre" => 18, "octubre" => 21, "noviembre" => 27, "diciembre" => 32),
  "2017" => array("enero" => 33, "febrero" => 31, "marzo" => 28, "abril" => 22, "mayo" => 18, "junio" => 13, "julio" => 11, "agosto" => 14, "septiembre" => 17, "octubre" => 22, "noviembre" => 26, "diciembre" => 31),
  "2018" => array("enero" => 32, "febrero" => 30, "marzo" => 28, "abril" => 22, "mayo" => 17, "junio" => 12, "julio" => 9, "agosto" => 13, "septiembre" => 16, "octubre" => 20, "noviembre" => 24, "diciembre" => 30),
  "2019" => array("enero" => 32, "febrero" => 30, "marzo" => 27, "abril" => 23, "mayo" => 19, "junio" => 14, "julio" => 12, "agosto" => 11, "septiembre" => 17, "octubre" => 23, "noviembre" => 25, "diciembre" => 29),
  "2020" => array("enero" => 31, "febrero" => 29, "marzo" => 28, "abril" => 21, "mayo" => 19, "junio" => 13, "julio" => 10, "agosto" => 12, "septiembre" => 16, "octubre" => 22, "noviembre" => 27, "diciembre" => 29),
  "2021" => array("enero" => 30, "febrero" => 28, "marzo" => 26, "abril" => 20, "mayo" => 16, "junio" => 12, "julio" => 11, "agosto" => 13, "septiembre" => 17, "octubre" => 21, "noviembre" => 28, "diciembre" => 30),
  "2022" => array("enero" => 31, "febrero" => 29, "marzo" => 27, "abril" => 21, "mayo" => 17, "junio" => 12, "julio" => 11, "agosto" => 15, "septiembre" => 18, "octubre" => 22, "noviembre" => 26, "diciembre" => 30),
  "2023" => array("enero" => 32, "febrero" => 30, "marzo" => 27, "abril" => 20, "mayo" => 16, "junio" => 13, "julio" => 13, "agosto" => 15, "septiembre" => 19, "octubre" => 23, "noviembre" => 28, "diciembre" => 31),
  );
  
 $matriz = array(
  "completa" => array("2014" => array("enero" => 30, "febrero" => 28, "marzo" => 26, "abril" => 22, "mayo" => 18, "junio" => 12, "julio" => 10, "agosto" => 14, "septiembre" => 17, "octubre" => 20, "noviembre" => 25, "diciembre" => 29),
  "2015" => array("enero" => 33, "febrero" => 30, "marzo" => 27, "abril" => 22, "mayo" => 19, "junio" => 13, "julio" => 11, "agosto" => 15, "septiembre" => 18, "octubre" => 21, "noviembre" => 26, "diciembre" => 31),
  "2016" => array("enero" => 34, "febrero" => 32, "marzo" => 29, "abril" => 21, "mayo" => 18, "junio" => 14, "julio" => 12, "agosto" => 16, "septiembre" => 18, "octubre" => 21, "noviembre" => 27, "diciembre" => 32),
  "2017" => array("enero" => 33, "febrero" => 31, "marzo" => 28, "abril" => 22, "mayo" => 18, "junio" => 13, "julio" => 11, "agosto" => 14, "septiembre" => 17, "octubre" => 22, "noviembre" => 26, "diciembre" => 31),
  "2018" => array("enero" => 32, "febrero" => 30, "marzo" => 28, "abril" => 22, "mayo" => 17, "junio" => 12, "julio" => 9, "agosto" => 13, "septiembre" => 16, "octubre" => 20, "noviembre" => 24, "diciembre" => 30),
  "2019" => array("enero" => 32, "febrero" => 30, "marzo" => 27, "abril" => 23, "mayo" => 19, "junio" => 14, "julio" => 12, "agosto" => 11, "septiembre" => 17, "octubre" => 23, "noviembre" => 25, "diciembre" => 29),
  "2020" => array("enero" => 31, "febrero" => 29, "marzo" => 28, "abril" => 21, "mayo" => 19, "junio" => 13, "julio" => 10, "agosto" => 12, "septiembre" => 16, "octubre" => 22, "noviembre" => 27, "diciembre" => 29),
  "2021" => array("enero" => 30, "febrero" => 28, "marzo" => 26, "abril" => 20, "mayo" => 16, "junio" => 12, "julio" => 11, "agosto" => 13, "septiembre" => 17, "octubre" => 21, "noviembre" => 28, "diciembre" => 30),
  "2022" => array("enero" => 31, "febrero" => 29, "marzo" => 27, "abril" => 21, "mayo" => 17, "junio" => 12, "julio" => 11, "agosto" => 15, "septiembre" => 18, "octubre" => 22, "noviembre" => 26, "diciembre" => 30),
  "2023" => array("enero" => 32, "febrero" => 30, "marzo" => 27, "abril" => 20, "mayo" => 16, "junio" => 13, "julio" => 13, "agosto" => 15, "septiembre" => 19, "octubre" => 23, "noviembre" => 28, "diciembre" => 31),
 ),
  "invierno" => array(
    "2019" => array( "julio" => 12, "agosto" => 11, "septiembre" => 17),
    "2020" => array( "julio" => 10, "agosto" => 12, "septiembre" => 16),
    "2021" => array( "julio" => 11, "agosto" => 13, "septiembre" => 17),
    "2022" => array( "julio" => 11, "agosto" => 15, "septiembre" => 18),
    "2023" => array( "julio" => 13, "agosto" => 15, "septiembre" => 19),
  ),
  "primavera" => array(  
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
    )
);
return $matriz; 










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







