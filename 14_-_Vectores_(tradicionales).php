<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php


    //Se lo puede crear al vuelo, sin tener que declararlo:
    $dias[0] = 31;
    $dias[1] = 28;

    echo $dias[0] . "<br>";
    echo $dias[1];
    echo "<br><br>";

    // podemos obviar el subíndice cuando asignamos los valores:
    $nombres[] = "juan";
    $nombres[] = "pedro";
    $nombres[] = "ana";
    $nombres2 = ["Ivor", "Alexander", "Guzman"];

    // count()==> Cuenta todos los elementos en un array o algo de un objeto.
    for ($f = 0; $f < count($nombres); $f++) {
        echo $nombres[$f];
        echo "<br>";
    }
    echo "<br>";
    for ($g = 0; $g < count($nombres2); $g++) {
        echo $nombres2[$g];
        echo "<br>";
    }
    echo "<br>";

    $diaSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
    for ($i = 0; $i < count($diaSemana); $i++) {
        echo $diaSemana[$i];
        echo "<br>";
    }
    ?>
</body>