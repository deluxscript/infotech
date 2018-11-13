<?php
session_start();
include 'connect.php';

	class KahootUser {
		private $db;
		
		public function __construct(){
			$this->db = new connection(); 
			$this->db = $this->db->connect();
		}

		public function signUp($username) {


			$sql =	$this->db->prepare("SELECT * FROM `users` WHERE username = ?");
			$sql->bindParam(1, $username);
			$sql->execute();
			//validate username exist
			if ($sql->rowCount() > 0) {
				//user already exist!
				$_SESSION['user_exist'] = "User named : ".$username." already exist! please choose another username";
				//kindly pass $_SESSION['user_exist'] in a beautiful front end alert notification
				//to notify user that the username already exist.
			}else{
				
				try {
					//create user if none corresponding username exist
					$user = $this->db->prepare("INSERT INTO `users` (`username`, `created_at`) VALUES (?,?)");
					//login user 
					$now = date('Y/m/d H:i:s');
					$user->bindParam(1,$username);
					$user->bindParam(2, $now);
					$user->execute();

					$_SESSION['user'] = $user;
					// $_SESSION['user'] can now be used in other pages in the entire app
					//like the quize page and scores page;
				} catch (PDOException $e) {
					$this->dd($e->getMessage());
				}
			}

		}

		public function dd($variable){
			return var_dump($variable); exit;
		}
	}

?>