<?php
// print_r($_GET);
if (!isset($_GET["id"])) {
    header("Location:index.php");
}
include "model/conexion.php";
$id = $_GET["id"];
$sentencia = $bd->prepare("SELECT * FROM alumno WHERE id_alumno = ?; ");
$resultado = $sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
// print_r($persona);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumno</title>
</head>

<body>
    <div>
        <h3>Editar alumno:</h3>
        <form action="editarProceso.php" method="POST">
            <table>
                <table>
                    <tr>
                        <td>Apellido paterno:</td>
                        <td><input type="text" name="txt2Paterno" value="<?php echo $persona->ap_paterno ?>"></td>
                    </tr>
                    <tr>
                        <td>Apellido materno:</td>
                        <td><input type="text" name="txt2Materno" value="<?php echo $persona->ap_materno ?>"></td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="txt2Nombre" value="<?php echo $persona->nombre ?>"></td>
                    </tr>
                    <tr>
                        <td>Nota parcial:</td>
                        <td><input type="text" name="txt2Parcial" value="<?php echo $persona->ex_parcial ?>"></td>
                    </tr>
                    <tr>
                        <td>Nota final:</td>
                        <td><input type="text" name="txt2Final" value="<?php echo $persona->ex_final ?>"></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="oculto">
                        <input type="hidden" name="id2" value="<?php echo $persona->id_alumno; ?>">
                        <td><input type="submit" name="" value="Editar Alumno"></td>
                    </tr>
                </table>
            </table>
        </form>
    </div>
</body>

</html>