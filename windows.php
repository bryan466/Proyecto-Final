<?php 
	include "../app/categorycontroller.php";
	$categorycontroller = new categorycontroller();

	$categories = $categorycontroller->get();

	if (isset($_SESSION)==false || 
		isset($_SESSION['id'])==false) {
		
		header("Location:../");
	}
?>
	
	
<!DOCTYPE html>
<html>
<head>
	<title>
            Peliculas Bj
	</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.14'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
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






	
	<div>

		<h1>
			Categories
		</h1>

		<?php 

		if (isset($_SESSION) && isset($_SESSION['error'])) {

			echo "<h3> Error: ".$_SESSION['error']."</h3>";
			unset($_SESSION['error']);

		}

		?> 

		<?php if (isset($_SESSION) && isset($_SESSION['error']) ): ?>
		<h3>
			Error: <?= $_SESSION['error'] ?>
		</h3>
		<?php unset($_SESSION['error']); ?>
		<?php endif ?>

		<?php if (isset($_SESSION) && isset($_SESSION['success']) ): ?>
		<h3>
			Correcto: <?= $_SESSION['success'] ?>
		</h3>
		<?php unset($_SESSION['success']); ?>
		<?php endif ?>
		
		<table>
			<thead>
				<th>
					#
				</th>
				<th>
					Name
				</th>
				<th>
					Description
				</th>
				<th>
					Actions
				</th>
			</thead>
			<tbody>

				<?php 

				// foreach ($categories as $category) {
					
				// 	echo "<tr>
					
				// 		<td>
				// 			".$category['id']."
				// 		</td>
				// 		<td>
				// 			".$category['name']."
				// 		</td>
				// 		<td>
				// 			".$category['description']."
				// 		</td>

				// 		<td>
				// 			<button onclick='edit(".$category['id'].",\"".$category['name']."\",\"".$category['description']."\",\"".$category['status']."\")' >
				// 				Edit category
				// 			</button>

				// 			<button onclick='delete(".$category['id'].")' > Delete category </button>

				// 		</td>

				// 	</tr>";

				// }


				?> 

			</tbody>
		</table>

		

		<form id="updateForm" action="../app/categorycontroller.php" method="POST">
			<fieldset>
				
				<legend>
					Edit Category
				</legend>

				<label>
					Name
				</label>
				<input type="text" id="name" name="name" placeholder="terror" required=""> 
				<br>

				<label>
					Description
				</label>
				<textarea placeholder="write here" id="description" name="description" rows="5" required=""></textarea>
				<br>

				<label>
					Status
				</label>
				<select id="status" name="status">
					<option> active </option>
					<option> inactive </option>
				</select>
				<br>

				<button type="submit" >Save Category</button>
				<input type="hidden" name="action" value="update">
				<input type="hidden" name="id" id="id">

			</fieldset>
		</form>

		<form id="destroyForm" action="../app/categorycontroller.php" method="POST">

			<input type="hidden" name="action" value="destroy">
			<input type="hidden" name="id" id="id_destroy">

		</form>

	</div>



	<script type="text/javascript">
		function edit(id,name,description,status)
		{	
			document.getElementById('storeForm').style.display="none";
			document.getElementById('updateForm').style.display="block";

			document.getElementById('name').value = name;
			document.getElementById('description').value = description;
			document.getElementById('status').value = status;
			document.getElementById('id').value = id;
		}

		function remove(id)
		{
			var confirm = prompt("Si quiere eliminar el registro, escriba :"+id);
			if (confirm == id) {

				document.getElementById('id_destroy').value = id;
				document.getElementById('destroyForm').submit();
			}
		}
	</script>


</body>

</html>