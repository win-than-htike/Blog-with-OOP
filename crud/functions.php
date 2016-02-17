<?php 

/**
* CRUD Post
*/
class Post{

		public $db;
	
		function __construct(){

			$this->db = new mysqli('localhost','root','root','blog_oop');

			if ($this->db->connect_error) {
				die(var_dump($this->db->connect_error));
			}
		
		}

		function create($title, $content){

			$sql = 'INSERT INTO posts (title, content, author) VALUES ("' . $title . '","' . $content .'", "win than")';

				$result = $this->db->query($sql);

				if ($result) {

					header("location: read-posts.php");	

				} else {

					echo $this->db->error;

				}

			$this->db->close();

		}

		function read(){

			$sql = "SELECT * FROM posts";

			$result = $this->db->query($sql);

			if ($result) {
				
				if ($result->num_rows > 0) {
					
					for ($i=1; $i <= $result->num_rows ; $i++) { 
						
						$rows[] = $result->fetch_object();

					}

					return $rows;

				} else {

					echo "There is no data in Database;";

				}

			} else {

				echo $this->db->error();

			}

			$this->db->close();

		}


		function read_post($id){

			$sql = "SELECT * FROM posts WHERE id = " . $id;

			$result = $this->db->query($sql);

			if ($result->num_rows > 0) {
				
				return $result->fetch_object();

			} else {

				echo $this->db->error;

			}

			$this->db->close();

		}

		function update_new($id){

			$sql = "SELECT * FROM posts WHERE id = $id";

			$result = $this->db->query($sql);

			if ($result) {
				
				$row = $result->fetch_object();
				return $row;

			}else{

				echo $this->db->error;

			}

			$this->db->close();

		}

		function update($id, $title, $content){

			$sql = "UPDATE posts SET title = '$title',content = '$content' WHERE id = $id";

			$result = $this->db->query($sql);

			

			if ($result) {
				
				header("location: read-posts.php");

			} else {

				echo $this->db->error;
				
			}

			$this->db->close();

		}

		function delete($id){

			$sql = "DELETE FROM posts WHERE id = " . $id;

			$result = $this->db->query($sql);

			if ($result) {

				header("location: read-posts.php");

			} else {

				echo $this->db->error;

			}

			$this->db->close();

		}

}

 ?>