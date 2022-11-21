<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>title</title>
    <link rel="stylesheet" href="linkToCSS" />
</head>

<body>
    <form action="11_FORMULARIO_proceso.php"  method=" post">
        <label for="valorA">Ingrese primer valor:</label>
        <input type=" text" name="valor1" id="valorA">
        <br><br><br>
        <label for="valorB">Ingrese segundo valor:</label>
        <input type=" text" name="valor2" id="valorB">
        <br><br>
        <input type="checkbox" name="check1">sumar
        <br>
        <input type="checkbox" name="check2">restar
        <br><br>
        <input type="submit" name="operar">
    </form>
</body </html>