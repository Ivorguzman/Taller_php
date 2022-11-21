<html>

<head>
    <title>Formulario de entrada del dato</title>
</head>

<body>

    <form method="post" action="9_pagina2.php">
        <label>Ingrese su nombre:</label>
        <input type="text" name="nombre">
        <input type="submit" value="confirmar">
        <br>

    </form>

    <!--
        El elemento <form> y </form> nos permite definir un formulario en la página.
Este elemento tiene dos propiedades que debemos inicializar obligatoriamente: action y method.
La propiedad action indica el nombre del archivo que recibirá los datos ingresados por el operador en el formulario y que
serán enviados al servidor cuando se presione el botón (submit). La propiedad method indica como se organizan esos
datos para enviarlos al servidor, pudiendo ser mediante los métodos post o get (normalmente los datos de un formulario
se envían mediante el método post).
Para crear un cuadro de texto para el ingreso del nombre debemos definir un objeto de tipo "text" y darle un nombre:
<input type="text" name="nombre"> La propiedad type nos permite definir el tipo de control y con la propiedad name indicamos el nombre del control.Por último todo formulario tiene un botón de tipo submit:<input type="submit" value="confirmar">
-->
</body>

</html>