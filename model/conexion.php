<?php
$contrasenia = "";
$usuario = "root";
$nombrebd = "crud-notas";

try {
    $bd = new PDO(
        "mysql:host=localhost:33065;
            dbname=" . $nombrebd,
        $usuario,
        $contrasenia
    );
    // echo "conexion ok";
} catch (Exception $e) {
    echo "Error de conexión" . $e->getMessage();
}
