<?php 

	require_once 'functions.php';

	$title = $_POST['title'];
	$content = $_POST['content'];

	$posts = new Post();
	$posts->create($title, $content);

	


 ?>

 