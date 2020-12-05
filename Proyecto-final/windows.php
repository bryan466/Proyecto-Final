<!DOCTYPE html>
<html>
<head>
	<title>
		Categories
	</title>
	<style type="text/css">
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		#updateForm{
			display: none;
		}
	</style>
</head>
<body>
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

				<?php foreach ($categories as $category): ?>

				<tr>
					
					<td>
						<?= $category['id'] ?>
					</td>
					<td>
						<?= $category['name'] ?>
					</td>
					<td>
						<?= $category['description'] ?>
					</td>
					<td>
						<button onclick="edit(<?= $category['id'] ?>,'<?= $category['name'] ?>','<?= $category['description'] ?>','<?= $category['status'] ?>')">
							Edit category
						</button>

						<button onclick="remove(<?= $category['id'] ?>)" style="background-color: red;color:white;">
							Delete category
						</button>
					</td>

				</tr>

			</tbody>
		</table>

		<?php 
	include "../app/categoryController.php";
	include "../app/movieController.php";

	$categoryController = new CategoryController();
	$movieController = new MovieController();

	$categories = $categoryController->get();
	$movies = $movieController->get();

	// if (!isset($_SESSION['id']) || $_SESSION['role'] != "admin") {
	// 	header("Location:../");
	// }

	#echo json_encode($movies);
?>
<fieldset>
		<legend> Movies </legend>
	
	<?php include "../layouts/alerts.template.php"; ?>

	<table>
		<thead>
			<th>
				#
			</th>
			<th>
				title
			</th>
			<th>
				cover
			</th>
			<th>
				minutes
			</th>
			<th>
				category
			</th>
		</thead>
		<tbody>
			<?php foreach ($movies as $movie): ?>
			<tr>
				<td>
					<?= $movie['id'] ?>
				</td>
				<td></td>
				<td>
					<img style="width: 10%" src="../assets/img/movies/<?= $movie['cover'] ?>">
				</td>
				<td>
					<a href="details/?id=<?= $movie['id'] ?>">
						show details
					</a>
				</td>

			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

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



		<form id="storeForm" action="../app/categoryController.php" method="POST">
			<fieldset>
				
				<legend>
					Add new Category
				</legend>

				<label>
					Name
				</label>
				<input type="text"  name="name" placeholder="terror" required=""> 
				<br>

				<label>
					Description
				</label>
				<textarea placeholder="write here" name="description" rows="5" required=""></textarea>
				<br>

				<label>
					Status
				</label>
				<select name="status">
					<option> active </option>
					<option> inactive </option>
				</select>
				<br>

				<button type="submit" >Save Category</button>
				<input type="hidden" name="action" value="store">

			</fieldset>
		</form>

		<form id="updateForm" action="../app/categoryController.php" method="POST">
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

		<form id="destroyForm" action="../app/categoryController.php" method="POST">

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