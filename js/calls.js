$(document).ready(function() {
  $("#central").load("views/Home.php");
  $("#Inicio").click(function() {
    $("#central").load("views/Home.php");
  });
  $("#Clientes").click(function() {
    $("#central").load("views/Clientes.php");
  });
  $("#R_Clientes").click(function() {
    $("#central").load("views/R_Clientes.php");
  });
  $("#Companias").click(function() {
    $("#central").load("views/Companias.php");
  });
  $("#Reportes").click(function() {
    $("#central").load("views/Reportes.php");
  });
  $("#Susbcripciones").click(function() {
    $("#central").load("views/Subscriptos.php");
  });
});