<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    if ($_REQUEST['radio1'] == "suma") { //$_REQUEST[] Una matriz asociativa que por defecto contiene el contenido de $_GET, $_POST y $_COOKIE.
        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
        echo "La suma es:" . $suma;
    } else {
        if ($_REQUEST['radio1'] == "resta") {
            $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
            echo "La resta es:" . $resta;
        }
    }
    ?>
</body>

</html>