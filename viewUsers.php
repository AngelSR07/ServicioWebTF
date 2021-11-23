<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/tabla.css">
    <title>Document</title>
</head>

<body>

    <?php
    //Creamos usuario
    $usuario = new SoapClient('http://localhost:8080/TF_SD/WebServiceUser?WSDL');

    $accion = $_POST['accion'];

    switch ($accion) {
        case 'Login':
            $nomU = $_POST['nameU'];
            $pass = $_POST['passU'];

            $resultado = $usuario->login([
                "nameU" => $nomU,
                "passU" => $pass
            ])->return;

            $mensaje = "No bienvenido";

            if (strlen($mensaje) == strlen($resultado)) {
                header("Location: index.php");
                die();
            }

            break;

        case 'Register':

            $nomU = $_POST['nameU'];
            $pass = $_POST['passU'];

            $resultado = $usuario->insert([
                "nameU" => $nomU,
                "passU" => $pass
            ])->return;

            if (!$resultado) {
                header("register.php");
            }

            break;

        case 'Update':

            $id = $_POST['id'];
            $nomU = $_POST['nameU'];
            $pass = $_POST['passU'];

            $resultado = $usuario->update([
                "idU" => $id,
                "nameU" => $nomU,
                "passU" => $pass
            ])->return;

            break;

        case 'Delete':

            $id = $_POST['idU'];

            $resultado = $usuario->delete([
                "idU" => $id
            ])->return;

            break;
    }

    $viewUsers = $usuario->selectAll()->return;

    $datos = json_encode($viewUsers);
    $verDatos = json_decode($datos, TRUE);

    ?>

    <div id="main-container">

        <a href="index.php"><button>Volver a index</button></a>
        <br><br><br>

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Contraseñas</th>
                    <th>Configuración</th>
                </tr>
            </thead>

            <?php foreach ($verDatos as $datosU) { ?>
                <tr>
                    <td><?php echo $datosU['id']; ?></td>
                    <td><?php echo $datosU['nom']; ?></td>
                    <td><?php echo $datosU['pass']; ?></td>
                    <td>
                        <form method="POST" action="updateUser.php">
                            <input type="hidden" name="idU" value="<?php echo $datosU['id'] ?>">
                            <input type="hidden" name="nomU" value="<?php echo $datosU['nom'] ?>">
                            <input type="hidden" name="passU" value="<?php echo $datosU['pass'] ?>">
                            <button class="btn1" name="accion" value="">
                                <span>Editar datos</span>
                            </button>
                        </form>

                        <form method="POST" action="viewUsers.php">
                            <input type="hidden" name="idU" value="<?php echo $datosU['id'] ?>">
                            <button class="btn2" name="accion" value="Delete">
                                <span>Eliminar usuario</span>
                            </button>
                        </form>
                    </td>
                </tr>

            <?php
            } ?>

        </table>

    </div>

</body>

</html>