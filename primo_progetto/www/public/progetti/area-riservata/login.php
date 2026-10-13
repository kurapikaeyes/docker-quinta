<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Accesso all'area riservata</h1>
    <form action="controllo.php" method="POST">
        <p>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </p>

        <p>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </p>

        <button type="submit">Accedi</button>
    </form>
</body>
</html>



