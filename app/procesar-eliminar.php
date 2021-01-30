<?php
   $conexion = mysqli_connect("127.0.0.1","root","","netflix");
   $id = $_GET["id"];
   $eliminar= "DELETE  FROM categories WHERE id = '$id'"; 

   $resultadoEliminar = mysqli_query($conexion,$eliminar);


    if($resultadoEliminar){
        header("Location:categories.php");
    }else{
        echo "<script>alert('No se pudo eliminar el registro');window.history.go(-1);</script>";
    }


   ?>