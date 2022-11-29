<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

//**************** analisis del foreach ************ */
$array = array(1, 2, 3, 4);

//recorre el array dado por array. En   cada iteración, el valor del elemento actual de $array se asigna a $valor y el puntero interno del array, avanza una posición
foreach ($array as &$valor) {
 $valor = $valor * 2;
 echo $valor . "<br>";

}
echo "<br>";
// unset($valor); // rompe la referencia con el último elemento
echo $valor."<br><br><br>";

foreach ($array as $clave => $valor) {
 // $array[3] se actualizará con cada valor de $array...
 echo "clave = {$clave} .<br>";
 echo " valor =  {$valor}  .<br>";
 echo "Clave = {$clave},  Valor = {$valor}  .<br> <br>";
 // print_r($array);
}
//************************************************** */

$articulo = array(
 'codigo'      => 1,
 'descripcion' => 'manzanas',
 'precio'      => 30.25,
);

foreach ($articulo as $clave => $valor) {
 echo 'Para la clave :' . $clave . " almacena el valor: " . $valor;
 echo "<br>";
}





?>
</body>
</html>