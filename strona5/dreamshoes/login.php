<?php
	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
	{
		header('Location: index.php');
		exit();
	}

	require_once "connect.php";
	
		$login = $_POST['login'];
		$hasło = $_POST['password'];

echo $login;
		$sql = "SELECT * FROM użytkownik WHERE login='".$login."' AND hasło='".$hasło."'";
	
		try{
		foreach($conn->query($sql) as $col) {  

				$_SESSION['login'] = $col['Login'];
				$_SESSION['password'] = $col['hasło'];
				$_SESSION['name'] = $col['imię'];
				$_SESSION['status'] = $col['status'];
				

		if ($_SESSION['status']=='sprzedający'){
			//$stat = 'sprzedajacy';
			$_SESSION['zalogowany'] = true;
			header('Location:sprzedajacy.php');
		
		}
		else if($col['status']=='kupujący'){
			//$stat = 'kupujacy';
			$_SESSION['zalogowany'] = true;
			header('Location:kupujacy.php');
		} 


echo 'Witaj ' . $col['name'];


}
}
catch(PDOException $ERROR_MESSAGE)
    {
        echo 'ERROR: ' . $ERROR_MESSAGE->getMessage();
    }
		
		$conn=null;
	
	
?>