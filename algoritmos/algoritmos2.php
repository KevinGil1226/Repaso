<?php

$numeros = array();
$cantidadnumeros = readline("Ingrese la cantidad de números deseada: ");
$numayor = 0;
$numenor = 1000;
$c = 1;

for($i = 0; $i < $cantidadnumeros; $i++){
    $numero = readline("Ingrese el número " . $c . ":");
    array_push($numeros,$numero);
    $c++;

}

for($j = 0; $j < count($numeros); $j++){
    if($numeros[$j] > $numayor){
        $numayor = $numeros[$j];
    }elseif($numeros[$j] < $numenor){
        $numenor = $numeros[$j];
    }
}
print_r($numeros);
echo "El número mayor es: " . $numayor . "\n";
echo "El número menor es: " . $numenor . "\n";
