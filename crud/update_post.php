<?php 

	include 'functions.php';

	$id = $_POST['id'];

	$title = $_POST['title'];

	$content = $_POST['content'];

	$posts = new Post();

	$posts->update($id, $title, $content);

 ?>