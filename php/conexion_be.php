<?php


$conexion = mysqli_connect("localhost","root","","usuarios","3307");

if($conexion){
    echo 'Conectado exitosamente';
}else{
    echo 'No Conectado';
}

?>