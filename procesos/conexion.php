<?php
function conexion(){
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $bd = 'loginsuite';
    $puerto = 3306;

    $conexion = mysqli_connect(
                    $servidor,
                    $usuario,
                    $password,
                    $bd,
                    $puerto
    );
        return $conexion;
}
?>