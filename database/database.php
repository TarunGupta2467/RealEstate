<?php
class database{

   static function getDB(){
		$servername = "localhost";
		$username = "root";
		$password = "hrhk";
		$dbname = "project";
		$i=0;

		$conn = new mysqli($servername, $username, $password, $dbname);
        return $conn;

      }
}
?>