<?php
include 'conexion.php';
  function total_clientes(){
   $statement_clients=$GLOBALS['conect']->prepare("SELECT COUNT(*) FROM clientes");
   $statement_clients->execute();
   $number_of_rows_clients = $statement_clients->fetchColumn();
   return $number_of_rows_clients;
  }
  function clientes_con_seguro(){
    $statement_clients=$GLOBALS['conect']->prepare("SELECT COUNT(DISTINCT seguro.Id_Cliente) FROM seguro INNER JOIN clientes ON clientes.Id = seguro.Id_Cliente");
    $statement_clients->execute();
    $clientes_con = $statement_clients->fetchColumn();
    return $clientes_con;
  }
  function clientes_sin_seguro(){
    $statement_clients=$GLOBALS['conect']->prepare("SELECT COUNT(clientes.id) FROM clientes LEFT JOIN seguro ON clientes.Id = seguro.Id_Cliente WHERE seguro.Id_Cliente IS NULL");
    $statement_clients->execute();
    $clientes_sin = $statement_clients->fetchColumn();
    return $clientes_sin;
  }

  function Clientes_Tabla(){
    $statement_ctable=$GLOBALS['conect']->prepare("SELECT * FROM clientes");
    $statement_ctable->execute();
    $data=$statement_ctable->fetchAll(PDO::FETCH_OBJ);
    return $data;
  }
  function total_companias(){
    $statement_company=$GLOBALS['conect']->prepare("SELECT COUNT(*) FROM company");
    $statement_company->execute();
    $number_of_rows_company = $statement_company->fetchColumn();
    return $number_of_rows_company;
  }

  function total_reportes(){
    $statement_reports=$GLOBALS['conect']->prepare("SELECT COUNT(*) FROM reporte");
    $statement_reports->execute();
    $number_of_rows_reports = $statement_reports->fetchColumn();
    return $number_of_rows_reports;
  }
  function total_susbcripciones(){
    $statement_subs=$GLOBALS['conect']->prepare("SELECT COUNT(*) FROM suscripcion");
    $statement_subs->execute();
    $number_of_rows_subs = $statement_subs->fetchColumn();
    return $number_of_rows_subs;
  }
  function costo_subscripciones(){
    $statement=$GLOBALS['conect']->prepare("SELECT costo FROM suscripcion");
    $statement->execute();
    $costos=$statement->fetchAll();
    return $costos;
  }
  function reportes_nivel_dano_total(){
    $statement=$GLOBALS['conect']->prepare("SELECT COUNT(*) FROM reporte WHERE Nivel_Dano='perdida total'");
    $statement->execute();
    $danototal=$statement->fetchColumn();
    return $danototal;
  }
  function reportes_nivel_dano_moderado(){
    $statement=$GLOBALS['conect']->prepare("SELECT COUNT(*) FROM reporte WHERE Nivel_Dano='moderado'");
    $statement->execute();
    $danomoderado=$statement->fetchColumn();
    return $danomoderado;
  }
  function reportes_nivel_dano_leve(){
    $statement=$GLOBALS['conect']->prepare("SELECT COUNT(*) FROM reporte WHERE Nivel_Dano='leve'");
    $statement->execute();
    $danoleve=$statement->fetchColumn();
    return $danoleve;
  }
  function reportes_nivel(){
    $statement=$GLOBALS['conect']->prepare("SELECT Fecha FROM reporte");
    $statement->execute();
    $dano=$statement->fetchColumn();
    return $dano;
  }
  function Subscriptos(){
    $statement=$GLOBALS['conect']->prepare("SELECT SUM(Costo)FROM suscripcion");
    $statement->execute();
    $costos=$statement->fetchColumn();
    return $costos;
  }
  function Subscriptos_Count(){
    $statement=$GLOBALS['conect']->prepare("SELECT Id_Company, count(*) as personas_por_company FROM suscripcion GROUP BY Id_Company");
    $statement->execute();
    $costos=$statement->fetchColumn();
    return $costos;
  }
  function Reportes_Last(){
    $statement_ctable=$GLOBALS['conect']->prepare("SELECT * FROM reporte ORDER BY Folio DESC LIMIT 5");
    $statement_ctable->execute();
    $data=$statement_ctable->fetchAll(PDO::FETCH_OBJ);
    return $data;
  }
  function Promedio_Danos_Bajo(){
    $statement_ctable=$GLOBALS['conect']->prepare("SELECT COUNT(*) FROM reporte WHERE Nivel_Dano='leve'");
    $statement_ctable->execute();
    $data=$statement_ctable->fetchColumn();
    $porcentaje=$data/100;
    return $porcentaje;
  }
  function Promedio_Danos_Medio(){
    $statement_ctable=$GLOBALS['conect']->prepare("SELECT COUNT(*) FROM reporte WHERE Nivel_Dano='moderado'");
    $statement_ctable->execute();
    $data=$statement_ctable->fetchColumn();
    $porcentaje=$data/100;
    return $porcentaje;
  }
  function Promedio_Danos_Alto(){
    $statement_ctable=$GLOBALS['conect']->prepare("SELECT COUNT(*) FROM reporte WHERE Nivel_Dano='perdida total'");
    $statement_ctable->execute();
    $data=$statement_ctable->fetchColumn();
    $porcentaje=$data/100;
    return $porcentaje;
  }
  function Numero_Usuarios(){
    $statement_ctable=$GLOBALS['conect']->prepare("SELECT COUNT(*) FROM root");
    $statement_ctable->execute();
    $data=$statement_ctable->fetchColumn();
    return $data;
  }
  function Usuarios(){
    $statement_ctable=$GLOBALS['conect']->prepare("SELECT * FROM root");
    $statement_ctable->execute();
    $data=$statement_ctable->fetchAll(PDO::FETCH_OBJ);
    return $data;
  }
  function Ubicacion_Companias(){
    $statement=$GLOBALS['conect']->prepare("SELECT Ubicacion FROM company");
    $statement->execute();
    $data=$statement->fetchAll(PDO::FETCH_OBJ);
    return $data;
  }
  function Companias(){
    $statement=$GLOBALS['conect']->prepare("SELECT Id,Nombre FROM company");
    $statement->execute();
    $data=$statement->fetchAll(PDO::FETCH_OBJ);
    return $data;
  }
  function Folios_Seguro(){
    $statement=$GLOBALS['conect']->prepare("SELECT Folio FROM seguro");
    $statement->execute();
    $data=$statement->fetchAll(PDO::FETCH_OBJ);
    return $data;
  }
  function Ubicacion(){
    $statement=$GLOBALS['conect']->prepare("SELECT Ubicacion FROM reporte");
    $statement->execute();
    $data=$statement->fetchAll(PDO::FETCH_OBJ);
    return $data;
  }

 ?>
