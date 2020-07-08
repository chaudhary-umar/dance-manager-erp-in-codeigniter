<?php include("inc-main.php"); ?>
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

if($_SESSION['table']==""){
	header("Location: admin.php");
	exit;
}

if($_SESSION['columns']==""){
	header("Location: admin.php");
	exit;
}
if($_SESSION['style']==""){
	header("Location: admin.php");
	exit;
}



$coluMs = explode(",", $_SESSION['columnsHeaders']);
//print_r($coluMs);

if($_SESSION['groups']==""){
$group="";
}else{
$group=" GROUP BY ".$_SESSION['groups'];
}


$table=$_SESSION['table'];
$columns=$_SESSION['columns'];

mysqli_select_db($sys, $database_sys);
$query_datalist = "SELECT $columns FROM $table $group";
$datalist = mysqli_query($sys, $query_datalist) or die(mysqli_error($sys));
$row_datalist = mysqli_fetch_assoc($datalist);
$totalRows_datalist = mysqli_num_rows($datalist);

$table=$_SESSION['table'];

mysqli_select_db($sys, $database_sys);
$query_datastyle1 = "SELECT $columns FROM $table $group";
$datastyle1 = mysqli_query($sys, $query_datastyle1) or die(mysqli_error($sys));
$row_datastyle1 = mysqli_fetch_assoc($datastyle1);
$totalRows_datastyle1 = mysqli_num_rows($datastyle1);


$date=time();
	
$q=$date.".xls";

header("Expires: 0");
header("Cache-control: private");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Description: File Transfer");
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=view$q");
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MYSQL Report Generator</title>
    </head>

<body>
<table width="100%" border="0" cellpadding="5" cellspacing="0">
              <thead>
                <tr>
  <?php foreach ($coluMs as $value) { ?>
                  
                  <th><?php echo ucwords(str_replace("_"," ",$value)); ?></th>
  <?php }?>              
                  </tr>
                </thead>
              <tbody>
                <?php do { ?>
                  <tr>
  <?php foreach ($coluMs as $value) { ?>                
                    <td><?php echo $row_datastyle1[$value]; ?></td>
  <?php }?>                
                    </tr>
                  <?php } while ($row_datastyle1 = mysqli_fetch_assoc($datastyle1)); ?>
                </tbody>
              </table>
</body>
</html>