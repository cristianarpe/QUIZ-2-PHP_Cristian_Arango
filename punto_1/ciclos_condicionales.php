<?php

//CICLO FOR
echo " <b>Ciclo For </b> <br><br>";
for($x=1; $x<=30; $x ++){
    echo " ".$x." ";
}

//CICLO WHILE
echo "<br><br><b> Ciclo While </b> <br><br>";
$y= 0;
while($y<=60){
    echo $y." ";
    $y+=3;
}

//CONDICIONAL IF - ELSE IF - ELSE

echo "<br><br> <b> Ciclo If -Else if - Else </b><br><br>";
$w= 50;
$z= 20;

if ($w < $z) {
    echo "El numero w es menor que z";
} else if ($w > $z){
    echo "El numero w es mayor que z";
} else { 
    echo "Ingrese un numero";
}

//SWITCH
echo "<br><br> <b> Ciclo Switch </b><br><br>";

$a= 5;

switch ($a) {
    case 1:
        echo '$a es igual a 1.';

break;

case 2:
    echo '$a es igual a 2.';
        break;
case 3:
    echo '$a es igual a 3.';
    break;
case 4:
    echo '$a es igual a 4.';
    break;
case 5:
    echo '$a es igual a 5.';
    break;         
    
    default:
    '$a no es numero.';
        break;
}

//TERNARIA

echo "<br><br> <b> Evaluación Ternaria </b><br><br>";

$b ="";

$resultado= empty($b)? "Esta vacio": "No esta vacio";
echo $resultado;