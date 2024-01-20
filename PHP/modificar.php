<?php
 include "conexion.php";
$id=$_GET['id'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
echo $id;
echo '<br>';
echo $telefono;
$query="UPDATE contactos SET telefono=$telefono where id=$id";
mysqli_query($conexion,$query);
echo '<br>';
echo $nombre;
echo '<script>
setTimeout(()=>{
 window.location.href="../misContactos.php";
},3000)
</script>';

?>