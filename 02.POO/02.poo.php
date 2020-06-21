<?php

#CLASE
#Modelo que se utiliza para crear objectos que comparten un mismo comportamiento, estado y una misma identidad

class Automovil{

    #PROPIEDADES
    #Atributos que pueda tener un objecto

    public $marca;
    public $modelo;

    #Metodo

    public function mostrar(){
        echo "<p>Hola! soy un $this->marca,model $this->modelo</p>";
    }
}

#OBJETO
$a=new Automovil();
$a->marca="Toyota";
$a->modelo="Corolla";
$a->mostrar();

$b=new Automovil();
$b->marca="Hyundai";
$b->modelo="Elantra";
$b->mostrar();












?>