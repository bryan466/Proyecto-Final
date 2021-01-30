<?php
   $conexion = mysqli_connect("127.0.0.1","root","","netflix");
    
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description= $_POST["description"];
    $status = $_POST["status"];
    $created_at = $_POST["created_at"];


    $insertar = "INSERT INTO categories (id,name,description,status ,created_at) VALUES ('$id','$name','$description','$status','$created_at')";

    $resultado = mysqli_query($conexion,$insertar);
    if($resultado){
        echo "<script>alert('Se ha registrado el usuario con exito'); 
        window.location='/netflix'</script>";
    }else{
        echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
    }


?>