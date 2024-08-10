<?php

#sintaxis de PHP
#tipos de variables 
#enteros
$entero =10;
#flotantes 
$decimales =10.5;
#cadenas
$cadenas = "Hola mundo";
#booleanos 
$verdadero = true;
$falso = false;
#ciclos 
#ciclo for
for ($i=0; $i < 10; $i++) {
    echo $i . "<br>";
}
#ciclo while
$i = 0;
while ($i < 10){
    echo $i . "<br>";#para concatenar utilizo punto 
    $i++;
}

#ciclo do while
$i = 0;
do{ 
    echo $i . "<br>";
    $i++;
}while ($i < 10);
 
#estructuras de control
if($verdadero){
    echo "Verdadero"

}else{
    echo "Falso"
}

#if anidado
if ($verdadero){
    if($falso){
        echo "verdadero";
    }else{
        echo "Falso";
}else{
    echo "falso";
}
}

#funciones 
function suma($a, $b){
    return $a + $b;
}
#arrays
$array = array(1,2,3,4,5,6,7,8,9,10);
#arrays de texto
$array = array("uno","dos","tres","cuatro";"cinco","seis","siete","ocho","nueve","diez");

 ?>