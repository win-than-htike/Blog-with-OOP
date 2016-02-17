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
            <li><a href="/Blog/crud/read-posts.php" style="color:#fff;">Blog</a></li>
            <li><a href="/Blog/" style="color:#fff;">Home</a></li>
            <li><a href="/Blog/crud/create-new-post.php" style="color:#fff;">Create Post</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <?php 

		require_once('functions.php');

    $post = new Post();

		$posts = $post->read_post($_GET['id']);

	 ?>

    <div class="jumbotron" style="background:#fff;">
    	
	 	<div class="container">

	      	<h1><?php echo $posts->title; ?></h1>

			<p><?php echo $posts->content; ?></p>

    	</div>


    </div>	

	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.js"></script>

</body>
</html>