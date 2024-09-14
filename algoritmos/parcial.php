<?php
/*Hacer un algortimo que digitados n cantidad de numeros los guarde en un array y me hace lo siguiente,
1.numeros pares,suma de todos los numero pares
2.Numeros impares,resta de numeros impares
3.Numeros negativos si hay, si no que saque hay 0 
4.Si hay ceros y en que posicion se encuentran*/

$numeros=array();
$npares = array();
$nimpares = array();
$cantidadceros = 0;
$nparesuma = 0;
$nimparesuma = 0;
$n= readline("Digite cuantos números desea ingresar: ");

    for($i = 0;$i < $n; $i++){
        $numero = readline("ingrese el numero: ");
        array_push($numeros,$numero);
    }
    for($j = 0;$j < count($numeros);$j++){
            if ($numeros[$j] == 0) {
                $cantidadceros += 1;
             echo "El cero está en la posicion: " . $j . "\n";
            }
        
            if ($numeros[$j] % 2 == 0) {
                $nparesuma += $numeros[$j];
                array_push($npares,$numeros[$j]);
            } elseif ($numeros[$j] % 2 <> 0) {
                $nimparesuma -= $numeros[$j];
                array_push($nimpares,$numeros[$j]);
            }
        
        if($numeros[$j] < 0){
            echo "Negativo: " . $numeros[$j] . "\n";
        }
        
    
    }
    echo "La suma de pares es: " . $nparesuma . "\n";
    echo "La resta de impares es: " . $nimparesuma . "\n";
    echo "La cantidad de ceros es: " . $cantidadceros . "\n";
    for ($p = 0; $p < count($npares);$p++ ){
        echo "par: " . $npares[$p] . "\n";
    }
    for ($im = 0; $im < count($nimpares);$im++ ){
        echo "impar: " . $nimpares[$im] . "\n";
    }

