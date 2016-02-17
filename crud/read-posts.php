<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" style="background : #7e57c2;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:#fff;">The News</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/Blog/" style="color:#fff;">Home</a></li>
            <li><a href="/Blog/crud/create-new-post.php" style="color:#fff;">Create Post</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="jumbotron" style="background:#fff;">
    	
	 	<div class="container">

				<?php 

				include 'functions.php';

				$posts = new Post();

				$post = $posts->read();

				?>

				<?php foreach ($post as $p): ?>
					
					<ul>
						<h2><a href="single_read.php?id=<?php echo $p->id; ?>"><?php echo $p->title ?></a></h2>	
						<p><?php echo $p->content; ?></p>
						<a href="update_post_new.php?id=<?php echo $p->id; ?>" id="edit"><button class="btn btn-primary">Edit</button></a>
						<a href="delete_post.php?id=<?php echo $p->id; ?>" id="del"><button class="btn btn-danger">Delete</button></a>
						<hr>
					</ul>

				<?php endforeach ?>

    	</div>


    </div>	
	
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.js"></script>

</body>
</html>