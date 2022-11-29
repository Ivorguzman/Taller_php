<?php
///Array multi deimensional   

$alimento = [
    "fruta" => [
        "tropical" => "Mango",
        "citrico" => "Mandarina",
        "otros" => "manzana",
    ],
    "lacteos" => [
        "animal" => "vaca",
        "vegetal" => "coco"
    ],
    "carnes" => [
        "vacuno" => "lomo",
        "porcino" => "tocino"
    ],
];

/* 
// Como se adcedi a los elementos del array
echo "<br /> <br />";
echo "********************************** <br /> <br />";
echo $alimento["fruta"]["tropical"] . "<br />";
echo $alimento["fruta"]["citrico"] . "<br />";
echo $alimento["fruta"]["otos"] . "<br /><br />";
echo $alimento["lacteos"]["animal"] . "<br />";
echo $alimento["lacteos"]["vegetal"] . "<br /><br />";
echo $alimento["carnes"]["vacuno"] . "<br />";
echo $alimento["carnes"]["porcino"] . "<br /><br />";
*/


// recorriendolo los elementos del array con un foreach ($variable as $key => $value) {  # code...}
// list()  - Asignar variables como si fueran un array
// each () - Devolver el par clave/valor actual de un array y avanzar el cursor del array

foreach ($alimento as $key_1 => $keyValor2) {
    echo "$key_1 <br />";
    while (list($clave2, $valor2) = each($keyValor2)) // como si fuera una destructuracion de array de JS

        echo "$clave2" . "=" . "$valor2<br />";
        echo "<br />";

}
