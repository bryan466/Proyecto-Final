<?php
   $conexion = mysqli_connect("127.0.0.1","root","","netflix");
    
    $Id = $_POST["Id"];
    $Nombre = $_POST["Nombre"];
    $Descripcion = $_POST["Descripcion"];
    $Cover = $_POST["Cover"];
    $Minutos = $_POST["Minutos"];
    $Clasificacion = $_POST["Clasificacion"];
    $Categorias = $_POST["Categorias"];


    $insertar_pelicula = "INSERT INTO peliculas(Id, Nombre, Descripcion, Cover, Minutos, Clasificacion, Categorias) VALUES ('$Id','$Nombre','$Descripcion','$Cover','$Minutos','$Clasificacion','$Categorias')";

    $resultado_peli = mysqli_query($conexion, $insertar_pelicula);
    if($resultado_peli){
        echo "<script>alert('Se ha registrado el usuario con exito'); 
        window.location='/netflix'</script>";
    }else{
        echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
    }


?>
