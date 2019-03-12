<?php
if($_SESSION)
{
    if($_SESSION['Rol'] != 'Admin')
    {
        echo"<script> alert('no tienes los permisos necesarios');  window.location.href=\"http://localhost/crm-master/\"</script>";  
    }
}
else
{
    echo"<script> alert('no estas logeado');  window.location.href=\"http://localhost/crm-master/\"</script>";
}
?>