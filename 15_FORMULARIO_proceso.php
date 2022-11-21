<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    // fopen() => Abre un fichero o un URL  ["a"==> Apertura para sólo escritura]
    // fputs() => Escritura de un archivo
    // fclose()=> Cierra un puntero a un archivo abierto
    // die() => Imprime un mensaje y termina el script actual

    $ar = fopen("15_FORMULARIO_proceso.txt", "a") or
        die("Problemas en la creacion");
    fputs($ar, $_REQUEST['nombre']);
    fputs($ar, "\n");
    fputs($ar, "\n");
    fputs($ar, $_REQUEST['comentarios']);
    fputs($ar, "\n");
    fputs($ar, "--------------------------------------------------------");
    fputs($ar, "\n");
    fclose($ar);
    echo "Los datos se cargaron correctamente.";
    ?>
</body>

</html>