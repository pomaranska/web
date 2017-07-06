<div id="dodaj">
<?php
require_once "connect.php";


$dir = 'img/';
$max_file_size = 30000000;
$change_name = false; $name_length = 55;

if(!file_exists($dir)) exit('Katalog '.$dir.' nie istnieje!');

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload'])) {

    $tmp_name = $_FILES['userfile']['tmp_name'];
    $name = $_FILES['userfile']['name'];
    $type = $_FILES['userfile']['type'];
    $size = $_FILES['userfile']['size'];
    $error = $_FILES['userfile']['error'];
   
    $explode_name = explode('.',$name);
    $extension = @$explode_name[1];
   
    if($change_name) {
        $name = $explode_name[0];
        $new_name = substr(md5($name),0,$name_length).'.'.$extension;
        $path = $dir.$new_name;
    }
    else {
        $path = $dir.$name;
    }
   
    $dirname = dirname($_SERVER['SCRIPT_NAME']) == '/' || dirname($_SERVER['SCRIPT_NAME']) == '\\' ? null : dirname($_SERVER['SCRIPT_NAME']);
   
    $full_path = 'http://'.$_SERVER['HTTP_HOST'].$dirname.'/'.$path;
   
    if($error == UPLOAD_ERR_NO_FILE) {
        echo 'Wybierz plik.';
    }
    elseif($error == UPLOAD_ERR_PARTIAL) {
        echo 'Błąd! Plik został tylko częściowo załadowany.';
    }
    elseif($error == UPLOAD_ERR_NO_TMP_DIR) {
        echo 'Błąd! Brak folderu tymczasowego.';
    }
    elseif($error == UPLOAD_ERR_INI_SIZE) {
        echo 'Błąd! Plik jest za duży dla serwera.';
    }
    elseif($size > $max_file_size) {
        echo 'Za duży plik.';
    }
    else {
   
        if(is_uploaded_file($tmp_name)) {
       
            if(move_uploaded_file($tmp_name,$path)) {
                echo 'Plik został wysłany. <br /><a href="'.$full_path.'">'.$full_path.'</a><br><br>';
            }
            else {
                echo 'Nie udało się wysłać pliku. Spróbuj później.';
            }
     
        }
        else {
            echo 'Co ty próbujesz.';
        }
   
    }
       
}






if($_SERVER["REQUEST_METHOD"]=="POST"){
	//if($_POST['value']=='true'){
		
	if($_POST['nazwa']&$_POST['typ']&$_POST['rozmiar']){
try {
$sql="INSERT into produkty (nazwa,typ,rozmiar,cena,kolor,materiał,zdjęcie) VALUES('".$_POST['nazwa']."','".$_POST['typ']."',".$_POST['rozmiar'].",".$_POST['cena'].",'".$_POST['kolor']."','".$_POST['materiał']."','".$_POST['zdjęcie']."')";

$conn->exec($sql);
echo "<script>alert('Zatwierdź, aby przejść do dodanych produktów');
	window.location.href='sprzedajacy.php?value=dodane';</script>";}
catch(PDOException $e)
	{ echo $e->getMessage(); }
	
	}
	else{
		echo "<script>alert('Nie wypełniłeś wszystkich pól.')";
		}
}
else{
	echo'<form name="formularz" action=dodaj.php method="post" ENCTYPE="multipart/form-data">
	<label>Nazwa produktu</label>
	<input type="text" name="nazwa"></br>
	<label>Typ obuwia</label>
	<select name="typ">
		<option>damskie</option>
		<option>męskie</option>
	</select></br>
	<label>Rozmiar</label>
	<input type="text" name="rozmiar"></br>
	<label>Cena (w złotych)</label>
	<input type="text" name="cena"></br>
	<label>Kolor</label>
	<input type="text" name="kolor"></br>
	<label>Materiał</label>
	<input type="text" name="materiał"></br>
	<label>Wprowadź zdjęcie</label>
    <input type="file" name="zdjęcie"/><br/>
    <input type="submit" value="Wyślij plik"/>
	<input type="submit" value="ZAPISZ" class="zapisz">
	</form>';

}
$conn = null;

	
?></div>

<footer>
  <div id="copyright">
    <p>Copyright © 2016 - Aleksandra Pomarańska</p>
  </div>
</footer>

