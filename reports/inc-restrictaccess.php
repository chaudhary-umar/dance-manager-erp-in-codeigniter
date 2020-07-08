<?php
if (!isset($_SESSION)) {
  session_start();
}


$MM_restrictGoTo = "index.php?login=failed";
if (!((isset($_SESSION['MM_Username'])))) {   
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
