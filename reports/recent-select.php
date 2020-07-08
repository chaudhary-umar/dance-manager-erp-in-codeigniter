<?php include("inc-main.php"); ?>
<?php require_once('Connections/saha.php'); ?>
<?php require_once('Connections/sys.php'); ?>
<?php include("inc-restrictaccess.php"); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  //$theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string(@$saha, $theValue) : mysqli_escape_string(@$saha, $theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$dBUser=base64_decode(@$_GET['id']);

mysqli_select_db($saha, $database_saha);
$query_recent = "SELECT * FROM recent WHERE recent.id='$dBUser'";
$recent = mysqli_query($saha, $query_recent) or die(mysqli_error($saha));
$row_recent = mysqli_fetch_assoc($recent);
$totalRows_recent = mysqli_num_rows($recent);

$_SESSION['hostname']=$row_recent['databasehost'];
$_SESSION['database']=$row_recent['database'];
$_SESSION['username']=base64_decode($row_recent['databaseuser']);
$_SESSION['password']=base64_decode($row_recent['databasepass']);
$_SESSION['table']=$row_recent['tables'];
$_SESSION['columns']=$row_recent['columns'];
$_SESSION['columnsHeaders']=$row_recent['columns2'];
$_SESSION['groups']=$row_recent['group'];
$_SESSION['groupsTotal']=$row_recent['group2'];
$_SESSION['style']=$row_recent['style'];

header("Location: finish.php");
exit;
?>
