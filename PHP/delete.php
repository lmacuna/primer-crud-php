<?php
 include "conexion.php";
$id=$_GET['id'];




    $query="DELETE FROM contactos where id=$id";
    mysqli_query($conexion,$query);

    header('location:../misContactos.php');
  

?>
