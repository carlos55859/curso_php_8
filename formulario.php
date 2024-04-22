<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="procesar.php" method="POST" enctype="multipart/form-data">
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <label>
            Edad:
            <input type="number" name="edad">
        </label>
        <br>
        <p>Sexo:</p>
        <label>
            <input type="radio" name="sexo" value="Masculino">
            Masculino
        </label>
        <label>
            <input type="radio" name="sexo" value="Femenino">
            Femenino
        </label>
        <br>
        <p>roles</p>
        <label>
            <input type="checkbox" name="roles[]" value="administrador">
            administrador
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="edictor">
            edictor
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="master">
            master
        </label>
        <br>
        <br>
        <label>
            Imagen:
            <br>
            <input type="file" name="imagen">
        </label>
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>