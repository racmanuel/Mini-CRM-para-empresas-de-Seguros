<?php
include '../backend/conexion.php';

  $statement_c=$GLOBALS['conect']->prepare("INSERT INTO reporte(Nivel_Dano,Folio_Seguro,Detalles,Fecha,Ubicacion)
  VALUES (:dano,:seguro,:detalles,:fecha,:ubicacion)");
  $statement_c->bindParam(':dano',$_REQUEST['dano']);
  $statement_c->bindParam(':seguro',$_REQUEST['folio']);
  $statement_c->bindParam(':detalles',$_REQUEST['detalles']);
  $statement_c->bindParam(':fecha',$_REQUEST['fecha']);
  $statement_c->bindParam(':ubicacion',$_REQUEST['ubicacion']);
  $statement_c->execute();
  header("location: ../crm.php");
?>
