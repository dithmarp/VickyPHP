<!DOCTYPE html>
<html>
<head>
    <title>Crear Registro</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Crear Registro</h1>
    <!-- Formulario para ingresar datos -->
    <form action="process_create.php" method="post">
        Nombre: <input type="text" name="name"><br>
        Apellido: <input type="text" name="lastname"><br>
        Dirección: <input type="text" name="address"><br>
        Celular: <input type="text" name="cell"><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>
