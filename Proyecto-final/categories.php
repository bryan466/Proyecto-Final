<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.18'/>
    <title>iniciar sesion</title>
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

         <div class="name3"> <a   href="#">Configuraciones de categorias</a></div><br>

                <div class="vencategoria" action="../app/categorycontroller.php" method="POST">
                        <label>
                        Añadir nueva categoria
                        </label>
                        <br>
                        <br>
                        <label>
                        Nombre
                        </label><br>
                        <input type="text"  name="name" placeholder="Nombre" required=""> 
                        <br>

                        <label>
                        Description
                        </label><br>
                        <textarea placeholder="write here" name="description" rows="5" required=""></textarea>
                        <br>

                        <label>
                        Status
                        </label>
                            <select name="status">
                                <option> Active </option>
                                <option> Inactive </option>
                            </select>
                            <br>
                            <br>
                            <button type="submit" >Guardar Ctaegoria</button>
                            <input type="hidden" name="action" value="store">
                </div>
    </div>

</body>
</html>