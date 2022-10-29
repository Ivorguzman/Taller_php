<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $valor = rand(4, 10); //El valor aleatorio lo generamos llamando a la función rand(n,n) pasándole el valor mínimo y máximo: 
    echo "El valor sorteado es $valor<br>";
    if ($valor <= 5) {
        echo "Es menor o igual a 5";
    } else {
        echo "Es mayor a 5";
    }
    ?>
</body>

</html>