sus comentarios (disponemos un objeto de tipo "text" y otro de tipo "textarea"):
13_FORMULARIO_proceso.html
<html>

<head>
    <title>Problema</title>
</head>

<body>
    <form action="15_FORMULARIO_proceso.php" method="post">
        Ingrese su nombre:
        <input type="text" name="nombre">
        <br>
        Comentarios:
        <br>
        <textarea name="comentarios" rows="10" cols="40"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html