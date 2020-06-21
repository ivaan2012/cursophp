<?php
$numero=5;
echo "Esto es una variable numero: $numero<br>";
var_dump($numero);
echo "<br><br>";
$palabra="Palabra";
echo "Esto es una variable de texto: $palabra<br>";
var_dump($palabra);

$colores=array("Amarillo","Verde");
echo "<br><br>";
echo "Esto es una variable arreglo: $colores[1]<br>";
var_dump($colores);
echo "<br><br>";

$verduras=array("verdura1"=>"lechuga","verdura2"=>"cebolla");
echo "Esto es una variable arreglo con propiuedades: $verduras[verdura1]";
echo "<br><br>";
$frutas = (object)["fruta1"=>"Pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1<br>";
var_dump($frutas);

?>