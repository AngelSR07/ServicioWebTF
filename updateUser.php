<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $id = $_POST['idU'];
    $nomU = $_POST['nomU'];
    $pass = $_POST['passU'];

    ?>

    <header class="cabecera">

        <h1>Registrar nuevo usuario</h1>

    </header>

    <form action="viewUsers.php" method="POST">

        <div class="container">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" placeholder="Nombre de usuario" name="nameU" value="<?php echo $nomU; ?>" required><br><br>
            <input type="password" placeholder="Password" name="passU" value="<?php echo $pass; ?>" required><br><br>

        </div>


        <div class="botones">
            <button name="accion" value="Update">Cambiar datos</button>
        </div>

    </form>

</body>

</html>