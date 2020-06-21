<?php

#Codigo Imperativo

$automovil1=(object)["marca"=>"Toyota","modelo"=>"Corolla"];

$automovil2=(object)["marca"=>"Hyiundai","modelo"=>"Elantra"];

function mostrar($automovil){

    echo "<p>Hola! soy un $automovil->marca, modelo $automovil->modelo</p>";

}

mostrar($automovil1);
mostrar($automovil2);

















?>