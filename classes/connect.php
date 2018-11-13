<?php 
class connection {
	public function connect(){
		return new PDO("mysql:host=localhost; dbname=nysc_kahoot","root", "hayjay");
	}
}
 ?>