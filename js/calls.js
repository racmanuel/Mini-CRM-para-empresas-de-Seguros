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
  $("#R_Companias").click(function() {
    $("#central").load("views/R_Companias.php");
  });
  $("#R_Susbcripciones").click(function() {
    $("#central").load("views/R_Subscripciones.php");
  });
  $("#R_Reportes").click(function() {
    $("#central").load("views/R_Reportes.php");
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