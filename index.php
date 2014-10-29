$_COOKIE
<?php
  $name = "test";
  $value = "45";
  $expire = "time() + (60*60*24*7)";

setcookie("test", 45, time() + (60*60*24*7));
?>

<!DOCTYPE HTML>
<html>
  <head>
  <title>Praktikum 8</title>
  <meta charset="utf-8">
  </head>
  
  <body>
  <pre>
  <?php print_r($_COOKIE); 
  
  if (isset($_COOKIE["test"])) {
  echo $test = $_COOKIE["test"];}
  else {
  $test = "";
  }
  
  $test = $_COOKIE["test"];
  ?>
    </pre>
 </body>
</html>
