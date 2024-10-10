<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <form action="control.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required> <br>
        <label  for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required    > <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>