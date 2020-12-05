<!DOCTYPE html>
<html>
<head>
	<title>
            Peliculas Bj
	</title>
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.11'/>

 
</head>
<body>
    <div class="contenedor">
        <div class="header">
                <div class="logo">
                        <img src="img/icon (1).png"  height="45px">  
                </div>
                    
                    <div class="name"> <a  style="color:rgb(8, 123, 165)" href="#">Peliculas Bj</a></div>
                    
                        <nav>
                            <ul id="menu">
                                <li><a href="">Inicio</a></li>
                                <li><a href="">Añadir peliculas</a></li>
                                <li><a href="windows.php">Añadir categoria editar,eliminar</a></li>
                                <li><a href="login.php" >Inciar sesion</a></li>
                           
                            </ul>

                        </nav>

<form action="../app/movieController.php" method="POST" enctype="multipart/form-data" >
		<fieldset>
			<legend>
				Add Movie
			</legend>


			<label>
				Title
			</label>
			<input type="text" name="title" placeholder="movie name" required="">

			<br>

			<label>
				Description
			</label>
			<textarea name="descripiton" rows="5" placeholder="Description" required=""></textarea>

			<br>

			<label>
				Cover
			</label>
			<input type="file" name="cover" required="" accept="image/*">

			<br>

			<label>
				Minutes
			</label>
			<input type="number" name="minutes" placeholder="80" required="">
			
			<br>

			<label>
				Clasification
			</label>
			<select  name="clasification" required="">
				<option> B15 </option>
				<option> BA </option>
			</select>
			<br>


			<label>
				Category
			</label>
			<select  name="category_id" required=""> 
				<?php foreach ($categories as $category): ?>

				<option value="<?= $category['id'] ?>" >
					<?= $category['name'] ?>
				</option>

				<?php endforeach ?>

				<?php 
				// foreach ($categories as $category) {
				// 	echo "<option value=".$category['id']." >". $category['name'] ."</option>";
				// } 
				?>
			</select>
			<br>

			<button type="submit">
				Save
			</button>
			<input type="hidden" name="action" value="store">

		</fieldset>
	</form>

	</fieldset>



        </div>

        