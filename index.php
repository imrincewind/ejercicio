<?php
$agruparPor = 'edad'; //puede cambiarse por otra cosa



$original =[
  0 => [
     'name' => 'Juan',
     'edad' => 18
  ],
  1 => [
     'name' => 'Maria',
     'edad' => 40
  ],
  2 => [
     'name' => 'Diego',
     'edad' => 18
  ],
];

$sorted = agrupar($original, $agruparPor);

function agrupar($arreglo, $agrupar_por){
$retorno = [];


foreach ($arreglo as $elemento) {
    
    foreach ($elemento as $clave => $valor){
       
        if($agrupar_por == $clave){
         $retorno[$valor] = $elemento; //con esta linea se sobreescribe, por lo que queda un solo elemento siempre
         //array_push($retorno[$valor], $elemento);  //Si uso esta linea, no imprime nada, aunque creo que es
                                                    // esta la indicada, debe haber un error
        } 
        }
      
    }

    return $retorno;
     
   } 
    //print_r($original);
 print_r($sorted);


?>