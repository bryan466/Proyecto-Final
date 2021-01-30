<?php 
         $conexion = mysqli_connect("127.0.0.1","root","","netflix");

         $Id = $_POST["Id"];
         $Nombre = $_POST["Nombre"];
         $Descripcion = $_POST["Descripcion"];
         $Cover = $_POST["Cover"];
         $Minutos = $_POST["Minutos"];
         $Clasificacion = $_POST["Clasificacion"];
         $Categorias = $_POST["Categorias"];

    //actualizar datos
    $actualizarpeliculas = "UPDATE peliculas SET Nombre='$Nombre' , Descripcion ='$Descripcion', Cover ='$Cover',
    Minutos ='$Minutos' ,Clasificacion='$Clasificacion',Categorias ='$Categorias' WHERE Id='$Id'";

$resultado = mysqli_query($conexion,$actualizarpeliculas);

if($resultado){
    echo "<script>alert('Se ha actualizado los campos correctamente'); 
    window.location='/netflix/actualizar--categories.php';</script>";
}else{
    echo "<script>alert('No se pudo actualizar los campos');window.history.go(-1);</script>";
}

?>