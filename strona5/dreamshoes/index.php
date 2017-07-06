<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dream shoes</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/jquery-3.0.0.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript" ></script>
<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">

</head>

<body>
  <div id="nav">
    <?php
      include('nav.php');
    ?>
  </div>

  
  <?php

  if(isset($_GET['value'])){
    $value = $_GET['value'];

    if($value=='dolacz'){
      include('dolacz.php');
    }
    else if($value=='damskie'){
      include('butydamskie.php');
      }
    else if($value=='meskie'){
      include('butymeskie.php');
      }   
     else if($value=='buty'){
      include('buty.php');
      }      
    }
  else{
    include('content.php');}
?>
  

</body>
</html>
