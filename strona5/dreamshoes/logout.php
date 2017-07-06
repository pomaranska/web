<?php
session_start();


      include('index.php');

session_destroy();
$_SESSION = array ();

?>