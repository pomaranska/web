<?php
$servername = "localhost";
$username = "root";
$password = null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=dream_shoes;charset=utf8", $username, $password);
}
catch(PDOException $e)
	{ echo $e->getMessage(); }
//$conn = null;
?>