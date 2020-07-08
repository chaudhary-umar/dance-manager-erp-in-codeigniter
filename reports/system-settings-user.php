<?php include("inc-main.php"); ?>
<?php require_once('Connections/saha.php'); ?>
<?php include("inc-restrictaccess.php"); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

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
/*
mysqli_select_db($saha, $database_saha);
$query_owner = "SELECT * FROM admin";
$owner = mysqli_query($saha, $query_owner) or die(mysqli_error($saha));
$row_owner = mysqli_fetch_assoc($owner);
$totalRows_owner = mysqli_num_rows($owner);
*/

mysqli_select_db($saha, $database_saha);
$query_owner = "SELECT * FROM admin";
$owner = mysqli_query($saha, $query_owner) or die(mysqli_error($saha));
$row_owner = mysqli_fetch_assoc($owner);
$totalRows_owner = mysqli_num_rows($owner);


//echo $totalRows_panels;
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CWA - Web Admin </title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
   <?php echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />"; ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <table class="table table-striped table-bordered table-hover">
    <tr>
        <td align="left" bgcolor="#CCCCCC" style="border-bottom:1px solid #CCC;"><a href="system-settings-user-new.php?id=<?php echo $row_owner['id']; ?>" class="btn btn-primary">New User Account</a></td>
        <td width="50" align="left" bgcolor="#CCCCCC" style="border-bottom:1px solid #CCC;">&nbsp;</td>
    </tr>
  <?php do { ?>
    <tr>
      <td align="left" style="border-bottom:1px solid #CCC; font-size:16px;"><?php echo $row_owner['un']; ?> </td>
      <td align="left" style="border-bottom:1px solid #CCC;"><a href="system-settings-user-edit.php?id=<?php echo $row_owner['id']; ?>" class="btn btn-primary">Edit User
</a></td>
    </tr>
    <?php } while ($row_owner = mysqli_fetch_assoc($owner)); ?>
<tr>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
//mysqli_free_result($owner);
?>
