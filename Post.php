<?php
class Post {
	private $user_obj;
	private $db;

	public function __construct($db, $user){
		$this->db = $db;
		$this->user_obj = new User($db, $user);
	}

	public function submitPost($body) {
			$body = strip_tags($body);
		      
			if($body != "") {

				$date_added = date("Y-m-d H:i:s");
				
				$added_by = $this->

				}

				//insert post 
				$query = $db->prepare("INSERT INTO posts VALUES('', '$body', '$date_added', '$added_by')");
				$query->execute();

				//Insert notification 
			}
	}

	?>