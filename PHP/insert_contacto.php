<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];



function insertar_contacto($nombre,$apellido,$edad,$telefono){

    try {
        include "conexion.php";
        $query = "INSERT INTO contactos(nombre,apellido,edad,telefono)
            VALUES('$nombre','$apellido','$edad','$telefono')";

        $ejecutar = mysqli_query( $conexion, $query );
        
        echo '<a href="../index.php">Volver</a>';
        echo '<br>';
        echo '<br>';
        echo '<p>Contacto guardado correctamente!!!</p>';
        echo '<br>';
        echo '<p>Nombre:'.$nombre.'</p><br><p>Apellido:'.$apellido.'</p><br><p>Edad:'.$edad.'</p><br><p>TE:'.$telefono.'</p>';
    } catch (\Throwable $th) {
        //throw $th;
        echo $th;
    }

}

if($nombre and $apellido and $edad and $telefono){
    insertar_contacto($nombre,$apellido,$edad,$telefono);
    echo '<script>
    alert("Guardado!!!")
   
 
   
</script>';
}else{
    echo '<script>
         alert("falta completar uno o mas campos")
         setTimeout(()=>{
             window.location.href="../index.php"
         },1000)
    </script>';
   
}

?>