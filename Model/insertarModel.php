<?php
require_once('../Controller/usuario_controller.php');
if(isset($_POST['h_insertarUsuario'])){
$objUsuario=new Usuario();
$objUsuario->setCodigo_provincia(86);
$objUsuario->setNombre_usuario(strtoupper($_POST['txtnombre']));
$objUsuario->setApellido_usuario(strtoupper($_POST['txtapellido']));
$objUsuario->setDni_usuario($_POST['txtdni']);
$objUsuario->setCorreo_usuario(strtoupper($_POST['txtcorreo']));
$objUsuario->setCelular_usuario($_POST['txtcelular']);
$objUsuario->setDireccion_usuario($_POST['txtdireccion']);
$objUsuario->setClave_usuario($_POST['txtclave']);
$objUsuario->setSexo_usuario(strtoupper($_POST['rdosexo']));
$objUsuario->insertarUsuario();
}

