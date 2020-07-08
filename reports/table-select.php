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

mysqli_select_db($sys, $database_sys);
$query_totalRecords = "SELECT * FROM ".base64_decode(@$_GET['id']);
$totalRecords = mysqli_query($sys, $query_totalRecords) or die(mysqli_error($sys));
$row_totalRecords = mysqli_fetch_assoc($totalRecords);
$totalRows_totalRecords = mysqli_num_rows($totalRecords);

$_SESSION['columns']=NULL;
$_SESSION['columnsHeaders']=NULL;
$_SESSION['groups']=NULL;
$_SESSION['groupsTotal']=NULL;
$_SESSION['style']=NULL;

if($totalRows_totalRecords>0){
	$_SESSION['table']=base64_decode(@$_GET['id']);
}else{
	$_SESSION['table']=NULL;
}

header("Location: columns.php");
exit;
?>
