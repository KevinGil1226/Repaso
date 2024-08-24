<?php

#for($i = 1; $i <=10; $i++){
#echo $i . "\n";
#}
#$suma = 0;
#$n = readline("Digite el número: ");
#   for($i = 1; $i <= $n; $i++){
#      $suma += $i ;
# } echo $suma;
  
#$divisible = 0;
#$n = readline("Digite el número maximo: ");
 
#for($i = 1; $i <= $n; $i++){
#if( $i % 2 == 0){
#echo $i . "\n";
#}
#}

$n = readline("¿Cuantas personas desea ingresar?");


for($i = 1; $i <= $n; $i++){
    $nombre = readline("Digite su nombre completo: ");
    $licencia = readline("¿Tiene usted licencia de conducción? ");
    $edad = readline("Digite su edad: ");

    if($edad >= 18 && $licencia = "si" || "Si" || "SI"){
        echo $nombre . "\n" . "usted puede conducir" . "\n";
}else
    echo $nombre . "\n" . "usted no puede conducir" . "\n";
}










?>