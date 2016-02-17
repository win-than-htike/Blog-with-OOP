<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">

 </head>
 <body>

 	<?php 

	include 'functions.php';

	$post = new Post();

	$posts = $post->update_new($_GET['id']);

	?>

 	
 	<div class="container">

 		<h1>Create A New Post</h1><br>

 		<form action="update_post.php" method="POST">
 			<input type="hidden" name="id" value="<?php echo $posts->id; ?>">

 			<div class="form-group">
 				<label for="title">Post Title</label>
 				<input type="title" class="form-control" id="title" name="title" value="<?php echo $posts->title; ?>">
 			</div>

 			<div class="form-group">
 				<label for="content">Content</label>
 				<textarea class="form-control" name="content" rows="15"><?php echo $posts->content; ?></textarea>
 			</div>

 			<button type="submit" class="btn btn-primary">Done</button>

 		</form>

 	</div>

	<script src="../js/bootstrap.js"></script>
 </body>
 </html>