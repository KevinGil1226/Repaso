<?php
$n1=0;
$n2=0;
$n3=0;

$n1 = readline("Ingrese la nota número 1: ");
$n2 = readline("Ingrese la nota número 2: ");
$n3 = readline("Ingrese la nota número 3: ");

if($n1>$n2 && $n1>$n3 && $n2>$n3) {
echo "El número mayor es:" . $n1 . " y el menor es:" . $n3;
}elseif($n1>$n2 && $n1>$n3 && $n3>$n2){
    echo "El número mayor es:" . $n1 . " y el menor es:" . $n2;
}
elseif($n2>$n1 && $n2>$n3 && $n1>$n3){
    echo "El número mayor es:" . $n2 . " y el menor es:" . $n3;
}
elseif($n2>$n1 && $n2>$n3 && $n3>$n1){
    echo "y el menor es:" . $n2 . " y el menor es:" . $n1;
}elseif($n3>$n1 && $n3>$n2 && $n2>$n1){
    echo "El número mayor es:" . $n3 . " y el menor es:" . $n1;
}elseif($n3>$n1 && $n3>$n2 && $n1>$n2){
    echo "El número mayor es:" . $n3 . " y el menor es:" . $n2;
}
