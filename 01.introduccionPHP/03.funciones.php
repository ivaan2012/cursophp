<?php
#Funciones sin parametros

function saludo(){

    echo "Hola<br>";

}
saludo();

#Funciones con Parametro
function despedida($adios){
    echo $adios."<br>";
}
despedida("Adios");


#Funciones con Retorno

function retorno($retornar){

    return $retornar;

}

echo retorno("Que hay");

?>