<?php
session_start();
include 'connect.php';
class kahoot {
		private $db;
		// public $user;
	public function __construct(){
		$this->db = new connection(); //creating an instance of class connection after including the file on connect.php storing it in $db variable  using thgis keyword
		$this->db = $this->db->connect(); // using the function of class connection after storing connection in $db

	}//end of constructor

	public function sign_up($username) {

		//validate username exist
		if ($user_exist) {

		}else{
							echo "<script>alert('Sorrry,Username already exist!')</script>";
			
		} //end of password validation

	} //end of sign_up function
?>