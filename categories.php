<?php
      $conexion = mysqli_connect("127.0.0.1","root","","netflix");
     $usuarios= "SELECT * FROM categories"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.43'/>
    <title>Configurar categorias</title>
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

         <span class="img--agregar-categoria"> <form action="agregar-categorias.php" method="post">
          <input type="image" src="img/agregar-categoria.png" width="50" height="50"> </form> </span>

            <h2 class="container__title2">Tablas de categorias</h2>
                    <table class="table_categories">
                        <thead>
                                <tr class="campos"> 
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th >Fecha</th>
                                    <th COLSPAN="2">Operacion</th>
                                </tr> 
                        </thead>
                        <tbody>
                                <?php
                                    $result = mysqli_query($conexion, $usuarios);
                                    while($row = mysqli_fetch_assoc($result)){ ?>
                                    <tr>
                                            <td>  <?php echo $row["name"];?>        </td> 
                                            <td>  <?php echo $row["description"];?> </td> 
                                            <td>  <?php echo $row["status"];?>      </td> 
                                            <td>  <?php echo $row["created_at"];?>  </td> 
                                            <td><a href="app/actualizar--categories.php?id=<?php echo $row["id"];?>" class="campo_edit"><input type="image" src="img/editar-pelicula2.png" width="20" height="21"></a></td> 
                                            <td><a href="app/procesar-eliminar.php?id=<?php echo $row["id"];?>" class="campo_delete"><input type="image" src="img/eliminar-pelicula2.png" width="20" height="21"></a></td> 
                                    </tr>                                               
                                <?php }  mysqli_free_result($result);?>   
                                <script src="javascript/confirmacion.js"></script>  
                        </tbody>
                    </table> 
                        
            </div>

   
</body>
</html>