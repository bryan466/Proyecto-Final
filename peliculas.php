
<?php
      $conexion = mysqli_connect("127.0.0.1","root","","netflix");
     $peliculassql = "SELECT * FROM peliculas"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.49'/>
    <title>Configurar Peliculas</title>
</head>
<body>
 
        <div class="contenedor3"> 


        <div class="menu-lateral">
				<div class="logo2">
				<img src="img/icon (1).png"  height="50px">  
				</div>
				<br>
				<div class="name2"> <a   href="#">Peliculas Bj</a></div><br>
				<div  class="lista-menu">
					<ul class="lista-menu-1">
						<strong><li><a href="index.php"  style="color:#FF0000;" >Inicio</a></li></strong><br>
						<strong><li><a href="peliculas.php"  style="color:#FF0000;">Configurar peliculas</a></li></strong><br>
						<strong><li><a href="categories.php"  style="color:#FF0000;">Configurar categorias</a></li></strong><br>
						<strong><li><a href="login.php"  style="color:#FF0000;" >Inciar sesion</a></li></strong><br>
                        <strong><li><a href="graficas.php"  style="color:#FF0000;">Graficas</a></li></strong>
					</ul>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
         </div>


            <span class="img--agregar-pelicula"> <form action="agregar-pelicula.php" method="post">
          <input type="image" src="img/agregar-pelicula.png" width="50" height="50"> </form> </span>


            <h2 class="container__title3">Tabla de peliculas</h2>
                    <table class="table_peliculas"  cellpadding="0" cellspacing="10">
                        
                                <tr class="campos2"> 
                                    <th>Nombre</th>&nbsp;&nbsp;&nbsp;
                                    <th>Descripcion</th>&nbsp;&nbsp;&nbsp;
                                    <th>Cover</th>&nbsp;&nbsp;&nbsp;
									<th >Minutos</th>&nbsp;&nbsp;&nbsp;
									<th >Clasificacion</th>&nbsp;&nbsp;&nbsp;
									<th >Categorias</th>&nbsp;&nbsp;&nbsp;
                                    <th COLSPAN="2">Operacion</th>&nbsp;
                                </tr> 
                                <?php
                                    $result = mysqli_query($conexion, $peliculassql);
                                    while($row = mysqli_fetch_assoc($result)){ ?>
                                    <tr>
                                            <td>  <?php echo $row["Nombre"];?>        </td> 
                                            <td>  <?php echo $row["Descripcion"];?> </td> 
                                            <td>  <?php echo $row["Cover"];?>      </td> 
											<td>  <?php echo $row["Minutos"];?>  </td> 
											<td>  <?php echo $row["Clasificacion"];?>  </td> 
											<td>  <?php echo $row["Categorias"];?>  </td> 
                                            <td><a href="app/actualizar-peliculas.php?id=<?php echo $row["Id"];?>" class="campo_edit"><input type="image" src="img/editar-pelicula2.png" width="20" height="21"></a></td> 
                                            <td><a href="app/eliminar-peliculas.php?id=<?php echo $row["Id"];?>" class="campo_delete"><input type="image" src="img/eliminar-pelicula2.png" width="20" height="21"></a></td> 
                                         
                                    </tr>                                               
                                <?php }  mysqli_free_result($result);?>   
                                <script src="javascript/confirmacion.js"></script>  
                        
                    </table> 
                        
            </div>

   
</body>
</html>