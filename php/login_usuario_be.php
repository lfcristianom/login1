<?php
include 'conexion_be.php';

$documento = $_POST['documento'];
$contraseña = $_post['contraseña'];

$validar_login = mysql_query($conexion, "SELECT * FROM clientes WHERE documento='$documento'
and contraseña='$contraseña'");

if(mysqli_num_rows($validar_login)> 0){
    header("location:../bienvenida.php");
    exit;
}else{
    echo '
    <script>
    alert("Usuario no existe, por favor verifique los datos");
    window.location = "../index.php";
    </script>
    '
    exit;
}


?>