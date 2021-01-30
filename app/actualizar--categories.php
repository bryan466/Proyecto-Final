<?php
    $conexion = mysqli_connect("127.0.0.1","root","","netflix");
    $id = $_GET["id"];
    $sql= "SELECT * FROM categories WHERE id = '$id'";
?>

<!DOCTYPE html>
<html>
<head>
	<title>
            Peliculas Bj
	</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.31'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

    <body> 
                <div class="contenedor--actualizar">          
                   <div class ="title__update">Actualizar</div>
                   <br>
                   <br>
 
                    <form class="form--actualizar" action="app/procesar--actualizar.php" method="post">
                        <div class="campo--name--categories">Nombre</div>               
                        <div class="campo--desk--categories">Descripcion</div>  
                        <div class="campo--status--categories">Estado</div>  
                        <div class="campo--crea--categories">Fecha Y hora</div> 
                        
                            
                            
                                    <?php
                                        $result = mysqli_query($conexion,$sql);
                                        if(!$result) {
                                            var_dump(mysqli_error($conexion));
                                            exit;
                                        }
                                        var_dump($result);

                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <input type="hidden" class ="table__input1" value ="<?php echo $row["id"];?>" name="id">  
                                            <div class ="table__input2-move">
                                            <input type="text" class ="table__input2" value ="<?php echo $row["name"];?>" name="name">    
                                            <input type="text" class ="table__input3" value ="<?php echo $row["description"];?>" name="description"> 
                                            <input type="text" class ="table__input4" value ="<?php echo $row["status"];?>" name="status"> 
                                            <input type="text" class ="table__input5" value ="<?php echo $row["created_at"];?>" name="created_at">  
                                            </div>                                            
                                    <?php }  mysqli_free_result($result);?>  
                                            <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">
                 

                   </form> 
                            
                </div>
            
    </body>
</html>