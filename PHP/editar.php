<?php include "../include/header.php"?>
<?php include "../include/layoutSup.php"?>
<?php

include "conexion.php";
$id=$_GET['id'];

//echo $id;
$query="SELECT * FROM contactos where id=$id";
$resultado=mysqli_query($conexion,$query);
 if(mysqli_num_rows($resultado) == 1){
   
    $row=mysqli_fetch_array($resultado);
  
     
    
 }
?>

<a href="../misContactos.php">Volver</a>
<form class="d-flex p-5 flex-column border mt-4 " style="width:22em;margin:auto" action="modificar.php?id=<?php echo $row['id']?>" method="POST"><h4>Modificar</h4>
             <!--<input class="form-control mb-2" type="text" value=<?php echo $row['id']?> name="id"></input>-->
             <input class="form-control mb-2" type="text" value=<?php echo $row['nombre']?> name="nombre"></input>
             <input class="form-control mb-2" type="text" value=<?php echo $row['apellido']?> name="apellido"></input>
             <input class="form-control mb-2" type="text" value=<?php echo $row['edad']?> name="edad"></input>
             <input autofocus class="form-control mb-2" type="text" value=<?php echo $row['telefono']?> name="telefono"></input>
             <input class="btn btn-success" type="submit" value="UPDATE"></input>
             
</form>

<?php include "../include/layoutInf.php"?>
<?php include "../include/footer.php"?>