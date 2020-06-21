<?php


#Condiciones

$a=10;
$b=10;

if($a>$b){
    echo "A es mayor que B<br>";
}
else if($a==$b){
    echo "A es igual que B<br>";
}
else
    echo "B es mayor que A<br>";

#Switch

$dia="sabado";

switch($dia){
    case 'sabado':
        echo "Voy a estudiar php";
    break;
    case 'viernes':
        echo "Voy a la fiesta";
    break;
    default:echo "Voy a la escueñla";

}





?>