<?php


function conectarBD()
{
    $host = "localhost";
    $usuario = "postgres";
    $clave = "76369890";
    $bd = "BDPOKEWEB";
    $conexionBD = pg_connect("host=$host dbname=$bd port=5432 user=$usuario password=$clave") or die("Error al conectar la BD");
    if (!$conexionBD) {
        print "Error: " . pg_last_error();
    } else {
        print "Conexion exitosa: ";
        return $conexionBD;
    }
}
