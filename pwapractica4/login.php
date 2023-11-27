<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Inicio de Sesión</title>
</head>
<body>

<div class="login-container">
    <h1>Iniciar Sesión</h1>
    <form action="backend/auth.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <label for="role">Rol:</label>
        <select id="role" name="role" required>
            <option value="teacher">Docente</option>
            <option value="student">Estudiante</option>
        </select>

        <button type="submit">Iniciar Sesión</button>
    </form>
</div>

</body>
</html>
