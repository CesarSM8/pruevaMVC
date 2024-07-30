
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Comunidades</title>
</head>
<body>
    <h1>Lista de Comunidades</h1>
    <a href="/index.php?action=create">Agregar Comunidad</a>
    <ul>
        <?php foreach ($comunidades as $comunidad): ?>
            <li><?php echo $comunidad['nombre']; ?> - <?php echo $comunidad['direccion']; ?> - <?php echo $comunidad['poblacion']; ?> - <?php echo $comunidad['id_administrador']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>