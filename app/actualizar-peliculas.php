<?php
    $conexion = mysqli_connect("127.0.0.1","root","","netflix");
    $Id = $_GET["Id"];
    $sqlpeli = "SELECT * FROM peliculas WHERE Id = '$Id'";
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
 
                    <form class="form--actualizar" action="app/procesar--peliculas.php" method="post">
                        <div class="campo--name--categories">Nombre</div>               
                        <div class="campo--desk--categories">Descripcion</div>  
                        <div class="campo--cover--categories">Cover</div>  
                        <div class="campo--minutes--categories">Minutos</div> 
                        <div class="campo--clasification--categories">Clasificacion</div> 
                        <div class="campo--categories--categories">Categorias</div> 
                        
                          
                            
                                    <?php
                                        $result = mysqli_query($conexion,$sqlpeli);
                                        if(!$result) {
                                            var_dump(mysqli_error($conexion));
                                            exit;
                                        }
                                        var_dump($result);

                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <input type="hidden" class ="table__input1_peli" value ="<?php echo $row["id"];?>" name="id">  
                                            <div class ="table__input2-move">
                                            <input type="text" class ="table__input2_peli" value ="<?php echo $row["name"];?>" name="name"> </div>       
                                            <input type="text" class ="table__input3_peli" value ="<?php echo $row["description"];?>" name="description"> 
                                            <input type="text" class ="table__input4_peli" value ="<?php echo $row["status"];?>" name="status"> 
                                            <input type="text" class ="table__input5_peli" value ="<?php echo $row["created_at"];?>" name="created_at">                                              
                                    <?php }  mysqli_free_result($result);?>  
                                            <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar--peliculas">
                 

                   </form> 
                            
                </div>
            
    </body>
</html>