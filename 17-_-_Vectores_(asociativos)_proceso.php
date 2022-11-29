<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>17-_-_Vectores_(asociativos)_proceso</title>
    <!-- <link rel="stylesheet" href="linkToCSS" /> -->
</head>

<?php
    $suma = 0;
    foreach ($_REQUEST as $key => $value) {
        echo "Valor: " . $value . "<br>";
        $suma += $value;
    }
    echo "La suma es :$suma";
 ?>


</body>

</html>
