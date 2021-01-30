<?php 
	
	include "../app/categoryController.php";
	$categoryController = new CategoryController();

	$categories = $categoryController->get();


?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Site
	</title>
	<style type="text/css">
		.registerForm{
			width: 60%;
			background-color: gray;
			padding: 20px;
			border-radius: 5px;
			margin:auto;
			box-shadow: 2px 2px 2px 1px rgba(0,0,0,0.2);
		}
		.input-control{
			width: 95%;
			box-shadow: 5px -5px teal;
			margin: 5px;
			margin-bottom: 15px;
		}
		.input-control label{
			font-weight: bold;
			color:white; 
		}
		.input-control input{
			width: 100%;
			height: 20px; 
		}
		.btn{
			width: 100%;
			border-radius: 5px;
			margin: auto;
			height: 25px;
			background-color: teal;
			color:white;
			box-shadow: 2px 2px 2px 1px rgba(0,0,0,0.2);
		}
		.btn:hover{
			background-color: #417979;
		}
	</style>
</head>