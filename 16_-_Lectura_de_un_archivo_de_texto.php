<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>title</title>
    <link rel="stylesheet" href="linkToCSS" />
</head>

<body>

    <?php


    $ar = fopen("15_FORMULARIO_proceso.txt", "r") or
        die("No se pudo abrir el archivo");
    while (!feof($ar)) {
        $linea = fgets($ar); // $linea contiene una línea completa del archivo de texto, inclusive el salto de línea (\n)
        $lineasalto = nl2br($linea); // convertir (\n) caracter,  al elemento <br> del html
        echo $lineasalto;
    }
    fclose($ar)
    ?>

</body>

</html>