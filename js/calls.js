$(document).ready(function() {
  $("#central").load('home.php');
  $('#Dashboard').on('click', function() {
    $("#central").load('Dashboard.php');
    return false;
  })
  $('#Inicio').on('click', function() {
    $("#central").load('home.php');
    return false;
  })
});