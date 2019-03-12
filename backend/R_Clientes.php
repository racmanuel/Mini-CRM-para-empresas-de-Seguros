<?php
include '../backend/conexion.php';

  $statement_c=$GLOBALS['conect']->prepare("INSERT INTO clientes(Nombre,Telefono,Correo,Fecha_Nacimiento,Password)
  VALUES (:nombre,:telefono,:correo,:fecha,:Password)");
  $statement_c->bindParam(':nombre',$_REQUEST['nombre']);
  $statement_c->bindParam(':telefono',$_REQUEST['telefono']);
  $statement_c->bindParam(':correo',$_REQUEST['correo']);
  $statement_c->bindParam(':fecha',$_REQUEST['fecha']);
  $statement_c->bindParam(':Password',$_REQUEST['password']);
  $statement_c->execute();
  header("location: ../crm.php");
?>
