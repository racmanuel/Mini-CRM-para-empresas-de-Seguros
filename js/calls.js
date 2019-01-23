$(document).ready(function() {
  $('#Dashboard').on('click', function() {
    $("#central").load('Dashboard.php');
    return false;
  })
});