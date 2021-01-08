


<!DOCTYPE html>
<html>
<head>
	<title>
          Administrador
	</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.17'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

 
</head>
<body>
<div class="contenedor2">
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
						<strong><li><a href="login.php"  style="color:#FF0000;" >Inciar sesion</a></li></strong>
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

    <div class="name3"> <a   href="#">Peliculas Registradas</a></div><br>

  <form action="../app/movieController.php" method="POST" enctype="multipart/form-data" >
		<fieldset class= "fiel">
			<legend>
				Añadir pelicula
			</legend>


			<label>
			Titulo
			</label>
			<input type="text" name="title" placeholder="movie name" required="">

			<br>

			<label>
				Descripcion
			</label>
			<textarea name="descripiton" rows="5" placeholder="Description" required=""></textarea>

			<br>

			<label>
				Imagen
			</label>
			<input type="file" name="cover" required="" accept="image/*">

			<br>

			<label>
				Minutos
			</label>
			<input type="number" name="minutes" placeholder="80" required="">
			
			<br>

			<label>
				Clasificacion
			</label>
			<select  name="clasification" required="">
				<option> B15 </option>
				<option> BA </option>
			</select>
			<br>


			<label>
				Categoria
			</label>
			<select  name="category_id" required=""> 
				<?php foreach ($categories as $category): ?>

				<option value="<?= $category['id'] ?>" >
					<?= $category['name'] ?>
				</option>

				<?php endforeach ?>
				
				<option> Animacion </option>
				<option> Aventura</option>
				<option> Comedia </option>
				<option> Ciencia ficcion </option>
				<option> Drama   </option>
				<option> Terror  </option>
				
				
			</select>
			<br>
<br>
			<button type="submit">
				Guardar datos
			</button>
			<input type="hidden" name="action" value="store">

		</fieldset>
	</form>

	
    </div>