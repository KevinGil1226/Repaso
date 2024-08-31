<?php

$nest = readline("Digite el número de estudiantes: ");
$nota = 0;
for($i = 1; $i <= $nest; $i++){
    $nota = readline("Digite la nota del estudiante: ");
        if($nota >=  4.0 && $nota < 5.0){
            echo "Excelente" . "\n";
        }
        elseif($nota < 4.0 && $nota >=  3.0){
            echo "Sobresaliente" . "\n";
        }
        elseif($nota < 3.0 ){
            echo "Deficiente" . "\n";
        }
        else{
            echo "Error" . "\n";
        }
        if($nota % 2.0 == 0){
            echo "Par" . "\n";
        }
        else {
            echo "Impar" . "\n";
        }
    

}