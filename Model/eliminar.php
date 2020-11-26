<?php
require_once('../BD/conexion.php');
$sql="";
$resultado="";
$respuesta=0;
function eliminarUsuario(){
    $sql="Update usuario set estado=0";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        return $respuesta=1;
    }else{
        return $respuesta=0;
    }
}


?>