<?php
// Un vector  con subíndice entero
$registro[] = "20456322";
$registro[] = "Martinez Pablo";
$registro[] = "Colon 134";
echo $registro[2] . "<br>";
echo $registro[1] . "<br>";
echo $registro[0] . "<br><br><br>";


$registro = ["20456322", "Martinez Pablo", "Colon 134"];
echo $registro[0] . "<br>";
echo $registro[2] . "<br>";
echo $registro[1] . "<br><br><br>";


$registro = array("20456322", "Martinez Pablo", "Colon 134");
echo $registro[1] . "<br>";
echo $registro[0] . "<br>";
echo $registro[2] . "<br><br><br>";








//Un vector asociativo se define de la siguiente forma
$registro['dni'] = "20456322";
$registro['nombre'] = "Martinez Pablo";
$registro['direccion'] = "Colon 134";

echo $registro['direccion'] . "<br>";
echo $registro['nombre'] . "<br>";
echo $registro['dni'] . "<br><br><br>";

//Otras formas de crear un vector asociativo:

$registro = [
    'dni' => '20456322',
    'nombre' => 'Martinez Pablo',
    'direccion' => 'Colon 134',
];
echo $registro['dni'] . "<br><br><br>";
echo $registro['nombre'] . "<br>";
echo $registro['direccion'] . "<br>";


$registro = array(
    'dni' => '20456322',
    'nombre' => 'Martinez Pablo',
    'direccion' => 'Colon 134',
);

echo $registro['direccion'] . "<br>";
echo $registro['nombre'] . "<br>";
echo $registro['dni'] . "<br><br><br>";


$noArray = 2;
if (is_array($noArray)) { // is_array(...) Para saber si es un array    
    echo "registro" . "si es un array";
} else {
    echo "registro no es un array es una variable numerico";
}
;