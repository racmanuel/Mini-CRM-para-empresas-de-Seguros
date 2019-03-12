<?php
include '../backend/conexion.php';

  $statement_c=$GLOBALS['conect']->prepare("INSERT INTO company(Nombre,Ubicacion,Telefono,Correo)
  VALUES (:nombre,:ubicacion,:telefono,:correo)");
  $statement_c->bindParam(':nombre',$_REQUEST['nombre']);
  $statement_c->bindParam(':ubicacion',$_REQUEST['ubicacion']);
  $statement_c->bindParam(':telefono',$_REQUEST['telefono']);
  $statement_c->bindParam(':correo',$_REQUEST['correo']);
  $statement_c->execute();
  header("location: ../crm.php");
?>
