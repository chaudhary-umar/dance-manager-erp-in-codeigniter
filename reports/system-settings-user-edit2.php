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

  //$theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE admin SET un=%s, pw=%s WHERE id=%s",
                       GetSQLValueString($_POST['un'], "text"),
                       GetSQLValueString($_POST['pw'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysqli_select_db($saha, $database_saha);
  $Result1 = mysqli_query($saha, $updateSQL) or die(mysqli_error($saha));

  $updateGoTo = "system-settings-user-edit2.php?add=true";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
 
$id=@$_GET['id'];

mysqli_select_db($saha, $database_saha);
$query_selected = "SELECT * FROM admin WHERE admin.id='$id'";
$selected = mysqli_query($saha, $query_selected) or die(mysqli_error($saha));
$row_selected = mysqli_fetch_assoc($selected);
$totalRows_selected = mysqli_num_rows($selected);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>" onsubmit="document.getElementById('loading').innerHTML='Loading...';">
    <table class="table table-striped table-bordered table-hover">
  <?php if((@$_GET['add'])=="true"){ ?>  
    <tr>
      <td align="center" colspan="2" style="color:#093"><p><p><img src="img/errorno.png" width="128" height="128" /></p></p>
        <p>Updated Successfully !<br />
      Please Refresh your page to see the update</p></td>
    </tr>
<?php }else{?>    

    <tr>
      <td align="left"><input name="id" type="hidden" id="id" value="<?php echo $row_selected['id']; ?>" />&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="left">Username</td>
      <td><label for="un"></label>
      <input name="un" type="text" autocomplete="off" id="un" value="<?php echo $row_selected['un']; ?>" <?php if($_SESSION['MM_Username']=="administrator"){?>readonly="readonly"<?php }?> /></td>
    </tr>
    <tr>
      <td align="left">Current Password</td>
      <td><?php echo $row_selected['pw']; ?></td>
    </tr>
    <tr>
      <td align="left">Password</td>
      <td><label for="pw"></label>
      <input name="pw" type="password" id="pw" value="<?php echo $row_selected['pw']; ?>" required="required" /></td>
    </tr>
    <tr>
      <td align="left">&nbsp;</td>
      <td><table width="50%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20" valign="middle"><img src="img/reserved.png" width="16" height="16" /></td>
          <td align="left" valign="top" style="font-size:16px;" id="loading">
            <input type="submit" style="padding:5px; text-align:center; font-size:12px;" name="Submit" id="button" value="Update Settings" />

</td>
        </tr>
      </table></td>
    </tr>
<?php }?>    
  </table>
  <input type="hidden" name="MM_update" value="form1" />
</form>
</body>
</html>
<?php
//mysqli_free_result($selected);
?>
