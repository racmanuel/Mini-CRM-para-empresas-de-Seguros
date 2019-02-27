$(document).ready(function() {
  $("#Clientes").click(function() {
    $("#central").load("views/Clientes.php");
  });
  $("#Companias").click(function() {
    $("#central").load("views/Companias.php");
  });
  $("#Reportes").click(function() {
    $("#central").load("views/Reportes.php");
  });
  $("#Pruebas").click(function() {
    $("#central").load("views/chart.php");
  });
});