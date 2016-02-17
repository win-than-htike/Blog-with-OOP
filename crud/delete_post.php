<?php 

	include 'functions.php';

	$posts = new Post();

	$posts->delete($_GET['id']);

	
 ?>