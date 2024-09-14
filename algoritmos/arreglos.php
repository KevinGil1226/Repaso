<?php
#arreglos y como llenarlo dinamicamente

$notas = array();
$cantidadnotas = readline("Ingresa la cantidad de notas: ");
$i = 0;
while($i < $cantidadnotas){
    $nota = readline("Ingresa la nota: ");
    array_push($notas,$nota);
    $i++;
}
print_r($notas);

for($i = 0; $i < $cantidadnotas; $i++){
    $nota = readline("Ingrese la nota: ");
    array_push($notas,$nota);
}
print_r($notas);

$nombres = array();
$cantidadnombres = readline("Ingrese la cantidad de personas requerida: ");
 
for($i = 0; $i < $cantidadnombres; $i++){
    $nombre = readline("Ingrese el nombre: ");
    array_push($nombres,$nombre);
}
print_r($nombres);

#Recorrer el arreglo para imprimir -------------------------------------------------------------------------------------------

for($j = 0; $j < count($notas); $j++){

}

$notas = array();
$cantidadnotas = readline("Ingresa la cantidad de notas: ");

for($i = 0; $i < $cantidadnotas; $i++){
    $nota = readline("Ingrese la nota: ");
    array_push($notas,$nota);
}
$acumu = 0;
for($j = 0; $j < count($notas); $j++){
    $acumu += $notas[$j];
}
echo "La suma de las notas es: " . $acumu . "\n";
echo "El promedio de las notas es: " . $acumu / $cantidadnotas . "\n";
#---------------------------------------------------------------------------------------------------------------------------------------------------


$nombres = array();
$cantidadnombres = readline("Ingrese la cantidad de personas requerida: ");
 
for($i = 0; $i < $cantidadnombres; $i++){
    $nombre = readline("Ingrese el nombre: ");
    array_push($nombres,$nombre);
}

for($j = 0; $j < count($nombres); $j++){
    echo "Nombre numero " . $j . " " . $nombres[$j] . "\n";

}