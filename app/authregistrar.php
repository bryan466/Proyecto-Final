<?php 
  $conexion = mysqli_connect("127.0.0.1","root","","netflix"); 
    $Nombre=$_POST['Nombre'];
    $Correo=$_POST['Correo'];
    $Password=$_POST['Password'];


  
    $consulta = "INSERT INTO  usuarios (Nombre='$Nombre' and Correo = '$Correo' and  Password = '$Password'";
  
  $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario'");
  if(mysqli_num_rows($verificar_usuario)>)
  
  
  
  
    $resultado3 = mysqli_query($conexion,$consulta);
    if($resultado3>0){
        header("location:administrador.php");
    }else{
        echo "<script>alert('Error of authetication');window.history.go(-1);</script>";
        }
      
        mysqli_close($conexion);
    ?>