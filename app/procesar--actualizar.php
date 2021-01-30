<?php 
         $conexion = mysqli_connect("127.0.0.1","root","","netflix");

    $id = $_POST["id"];
    $name = $_POST["name"];
    $description= $_POST["description"];
    $status = $_POST["status"];
    $created_at = $_POST["created_at"];


    //actualizar datos
    $actualizar = "UPDATE categories SET name='$name' , description='$description', status='$status',
    created_at='$created_at' WHERE id='$id'";

$resultado = mysqli_query($conexion,$actualizar);

if($resultado){
    echo "<script>alert('Se ha actualizado los campos correctamente'); 
    window.location='/netflix/actualizar--categories.php';</script>";
}else{
    echo "<script>alert('No se pudo actualizar los campos');window.history.go(-1);</script>";
}

?>