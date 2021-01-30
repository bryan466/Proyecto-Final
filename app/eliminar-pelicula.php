<?php
   $conexion = mysqli_connect("127.0.0.1","root","","netflix");
   $Id = $_GET["Id"];
   $eliminar= "DELETE  FROM peliculas WHERE Id = '$Id'"; 

   $resultadoEliminarpeliculas = mysqli_query($conexion,$eliminar);


    if( $resultadoEliminarpeliculas){
        header("Location:peliculas.php");
    }else{
        echo "<script>alert('No se pudo eliminar el registro');window.history.go(-1);</script>";
    }


   ?>