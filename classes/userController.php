<?php
session_start();
include 'connect.php';

	class KahootUser {
		private $db;
			// public $user;
		public function __construct(){
			$this->db = new connection(); //creating an instance of class connection after including the file on connect.php storing it in $db variable  using thgis keyword
			$this->db = $this->db->connect(); // using the function of class connection after storing connection in $db

		}//end of constructor

		public function signUp($username) {


			$sql =	$this->db->prepare("SELECT * FROM `users` WHERE username = ?");
			$sql->bindParam(1, $username);
			$sql->execute();
			//validate username exist
			if ($sql->rowCount() > 0) {
				$response =  $sql->fetch(PDO::FETCH_ASSOC);
			}else{
				header('Loacation: index.php');
			} //end of password validation

		} //end of sign_up function

		public function dd($variable){
			return var_dump($variable); exit;
		}
	}

?>