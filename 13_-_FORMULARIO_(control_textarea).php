<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>12_FORMULARIO</title>
    <!-- <link rel="stylesheet" href="linkToCSS" /> -->
</head>

<body>
    <!--
    Problema
    Implementar un formulario web para ingresar el nombre de una persona en un control text y mediante un control de tipotextarea se permita el ingreso del curriculum de dicha persona.
 -->
    <form action="13_FORMULARIO_proceso.php" method="post">
        Ingrese nombre:<input type="text" name="nombre"><br>
        Ingrese su curriculum:<br>
        <textarea name="curriculum"></textarea>
        <br>
        <input type="submit" value="Confirmar">
    </form>
</body>

</html>