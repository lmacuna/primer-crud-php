
<?php include "include/header.php"?>
<?php include "include/navBar.php"?>
<h3>Mis contactos</h3>
<?php include "include/layoutSup.php"?>

<br>
<script type="text/javascript">

const confirmarDelete=(id)=>{
   var respuesta=window.confirm("Eliminar?");

   if(respuesta){
    window.location.href=`PHP/delete.php?id=${id}`;
   }else{
    alert("Sin eliminar");
   }
   
}

</script>
<div style="max-width:1200px;min-height:100%;flex-wrap:wrap;gap:1.2em" class="w-100 d-flex justify-content-center h-auto">
       <?php
    
         include "PHP/conexion.php";
        $query="SELECT * FROM contactos";
        $resultado=mysqli_query($conexion,$query);
            
            while($row=mysqli_fetch_array($resultado)){ ?>
            <div class="text-dark card card-body" style="background:rgb(235,235,235);width:18em;text-align:left;flex-basis:18em;border:1px solid grey;padding:15px;flex-direction:column !important;margin:30px;justify-content:center !important;align-items:left !important;font-weight:bold;box-shadow:0 0 1px grey,0 0 2px grey,0 0 4px grey">
           <p>Nombre: <?php  echo $row['nombre'] ?></p>
           <p>Apellido: <?php  echo $row['apellido'] ?></p>
           <p>Edad: <?php  echo $row['edad'] ?></p>
           <p>TE.: <?php  echo $row['telefono'] ?></p>
            <p style="width:100%;display:flex;justify-content:center;align-items:center;gap:2em;"><a class="text-dark" href="PHP/editar.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-pen"></i></a><a id=<?php echo $row['id']?> onclick="confirmarDelete(id)" class="text-danger"><i class="fa-solid fa-trash-can"></i></a></p>
            </div>
            <?php } ?>
          
      
</div>
   
   
 

<?php include "include/layoutInf.php"?>
<?php include "include/footer.php"?>
