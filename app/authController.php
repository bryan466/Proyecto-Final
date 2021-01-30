<?php 
    $conexion = mysqli_connect("127.0.0.1","root","","netflix");
    $Correo=$_POST['Correo'];
    $Password=$_POST['Password'];
   

    
    $consulta = "SELECT * FROM usuarios WHERE Correo = '$Correo' and  Password = '$Password'";
    $resultado3 = mysqli_query($conexion,$consulta);


    $filas = mysqli_num_rows($resultado3);

    if($filas>0){
        header("location:administrador.php");
    }else{
        echo "<script>alert('Error of authetication');window.history.go(-1);</script>";
        }
        mysqli_free_result($resultado3);
        mysqli_close($conexion);
    ?>