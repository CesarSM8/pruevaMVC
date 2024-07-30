<!DOCTYPE html>
<html>
<head>
    <title>Agregar Comunidad</title>
</head>
<body>
    <h1>Agregar Comunidad</h1>
    <form action="/index.php?action=create" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Dirección:</label>
        <input type="text" name="direccion" required>
        <br>
        <label>Población:</label>
        <input type="text" name="poblacion" required>
        <br>
        <label>ID Administrador:</label>
        <input type="text" name="id_administrador" required>
        <br>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>