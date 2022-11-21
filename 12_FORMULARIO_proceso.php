<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>title</title>
    <link rel="stylesheet" href="linkToCSS" />
</head>

<body>
    <?php
    // Verificando con isset() si [select name="operacion"]   está definido y no es null
    if (isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == "suma") {
        $suma = $_REQUEST["valor1"] + $_REQUEST["valor2"];
        echo "La suma es:" . $suma . "<br>";
    } else if(isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == "resta") {
        $resta = $_REQUEST["valor1"]  - $_REQUEST["valor2"];
        echo "La resta es:" . $resta . "<br>";
    }
    ?>
</body>

</html>