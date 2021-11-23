<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header class="cabecera">

        <h1>Registrar nuevo usuario</h1>

    </header>

    <form action="viewUsers.php" method="POST">

        <div class="container">
            <input type="text" placeholder="Nombre de usuario" name="nameU" required><br><br>
            <input type="password" placeholder="Password" name="passU" required><br><br>

        </div>


        <div class="botones">
            <button name="accion" value="Register">Registrar</button>
        </div>

    </form>

</body>

</html>