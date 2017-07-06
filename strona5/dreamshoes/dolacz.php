<div id="dolacz2">
<?php
require_once "connect.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	//if($_POST['value']=='true'){
		
	if($_POST['imię']&$_POST['nazwisko']&$_POST['login']){
		$status='kupujący';
try {
$sql="INSERT into użytkownik (imię,nazwisko,`e-mail`,adres,telefon,login,hasło,status) VALUES('".$_POST['imię']."','".$_POST['nazwisko']."','".$_POST['e-mail']."','".$_POST['adres']."',".$_POST['telefon'].",'".$_POST['login']."','".$_POST['hasło']."','".$status."')";

$conn->exec($sql);
echo "<script>alert('Dane zapisane poprawnie. Zatwierdź, aby przejść do strony głównej.');
	window.location.href='index.php';</script>";}
//echo "New record created successfully<br>";}
catch(PDOException $e)
	{ echo $e->getMessage(); }
	
	}
	else{
		echo "<script>alert('Nie wypełniłeś wszystkich pól.')";
		}
	//}
}
else{
	echo'
	<h1>Dołącz do nas już teraz i znajdź swoje wymarzone buty!</h1></br>
	';
echo'<form name="formularz" action=dolacz.php method="post">
	<label>Imię</label>
	<input type="text" name="imię"></br>
	<label>Nazwisko</label>
	<input type="text" name="nazwisko"></br>
	<label>E-mail</label>
	<input type="text" name="e-mail"></br>
	<label>Adres</label>
	<input type="text" name="adres"></br>
	<label>Telefon</label>
	<input type="text" name="telefon"></br>
	<label>Login</label>
	<input type="text" name="login"></br>
	<label>Hasło</label>
	<input type="text" name="hasło"></br>

	<input type="submit" value="ZAPISZ" class="zapisz">
	</form>';
}
$conn = null;

	
?></div>

    <?php
      include('footer.php');
    ?>
