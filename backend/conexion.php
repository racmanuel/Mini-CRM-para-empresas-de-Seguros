<?php
try {
  $conect= new PDO('mysql:host=localhost;dbname=crm','root','');
  return $conect;
} catch (PDOException $e) {
  echo $e;
}
 ?>
