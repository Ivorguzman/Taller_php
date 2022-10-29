<html>

<head>
    <title>Captura de datos del form</title>
</head>

<body>
    <?php
echo "El nombre ingresado es: ";
echo $_REQUEST['nombre']; // Una matriz asociativa que por defecto contiene el contenido de $_GET, $_POST y $_COOKIE.

/*
Para acceder al dato en PHP se cuenta con una matriz llamada  $_REQUEST indicando como subíndice el nombre del cuadro de texto que definimos en el formulario (dicho nombre es sensible a mayúsculas y minúsculas) Es común indicar entre comillas simples el subíndice en lugar de comillas dobles (con comillas dobles también funciona) En nuestro problema sólo mostramos por pantalla el valor ingresado en el formulario HTML:echo $_REQUEST['nombre'];
*/

?>
</body>

</html>