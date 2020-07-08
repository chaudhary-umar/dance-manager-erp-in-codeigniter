<?php include("inc-main.php"); ?>
<?php require_once('Connections/sys.php'); ?>
<?php include("inc-restrictaccess.php"); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}

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

if($_SESSION['table']==""){
	header("Location: table.php");
	exit;
}
$table=$_SESSION['table'];

mysqli_select_db($sys, $database_sys);
$query_tablelist = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$database_sys' AND TABLE_NAME = '$table'";
$tablelist = mysqli_query($sys, $query_tablelist) or die(mysqli_error($sys));
$row_tablelist = mysqli_fetch_assoc($tablelist);
$totalRows_tablelist = mysqli_num_rows($tablelist);



$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {

$r1="";
foreach(@$_POST as $key => $value) {
if(strpos($key,'checkbox') !== false) {
$rrr1.=$_SESSION['table'].".$value, ";
$rrr12.="$value,";
	}
}
$rrr= substr($rrr1, 0, -2);
$rrr2= substr($rrr12, 0, -1);

$_SESSION['columns']=$rrr;
$_SESSION['columnsHeaders']=$rrr2;

header("Location: group.php");
exit;
}

if($_SESSION['columnsHeaders']!=""){
$coluMs = explode(",", $_SESSION['columnsHeaders']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nelliwinne Mohottala">

    <title>MYSQL Report Generator</title>
<link rel="shortcut icon" href="icon.png" type="image/png" />

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

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                    <img src="img/MySQLReports.jpg" alt="" name="MySQLReports" width="205" height="79"> </a>
                </li>
                <li>
                  <a href="admin.php">Connect</a>
                </li>
                <li>
                    <a href="table.php">Data Source</a>
                </li>
                <li class="active">
                    <a href="columns.php">Colums</a>
                </li>
                <li>
                    <a href="group.php">Group By</a>
                </li>
                <li>
                    <a href="settings.php">Styles</a>
                </li>
                <li>
                    <a href="finish.php">Finish</a>
                </li>
                <li>
                    <a href="recent.php">My Reports</a>
                </li>
                <li>
                    <a href="users.php">System Users</a>
                </li>
                <li>
                    <a href="admin-logout.php" class="danger" >Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="h1">Table Columns</h1>
                        <h3>Colums from Selected Table</h3>
                        <p class="text-primary">Please Select / De-Select colums from <strong><?php echo $_SESSION['table']; ?></strong>.</p>
                        <form name="form1" method="POST" action="<?php echo $editFormAction; ?>">
        <table class="table table-striped table-bordered table-hover">
                            <tr>
                              <td>
<table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Column Name <input type="button" name="button2" id="button2" value="Previous" class="form-control"  style="width:100px; float:right;" onClick="window.location='table.php';"></th>
                                    <th width="50"><input type="submit" name="button" id="button" value="Next" class="form-control"  style="width:100px;"></th>
                                </tr>
                            </thead>
                            <tbody>
<?php $i=$stt;?>                            
                                <?php do { ?>
<?php 

$i=$i+1;
?>                                
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td style="font-size:16px;"><?php echo $row_tablelist['COLUMN_NAME']; ?><?php
if($_SESSION['columnsHeaders']!=""){
$columNSelected="false";
foreach ($coluMs as $value) {
if($value==$row_tablelist['COLUMN_NAME']){
$columNSelected="true";
}
}
}else{
$columNSelected="true";	
}?>

</td>
                                    <td>
                                    <input name="checkbox<?php echo $i; ?>" type="checkbox" id="checkbox<?php echo $i; ?>" value="<?php echo $row_tablelist['COLUMN_NAME']; ?>" <?php if($columNSelected=="true"){echo "checked=\"checked\"";}?> class="form-control" />
                                    </td>
                                </tr>
                                <?php } while ($row_tablelist = mysqli_fetch_assoc($tablelist)); ?>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td align="right" style="font-size:16px;"><input type="button" name="button2" id="button2" value="Previous" class="form-control"  style="width:100px;" onClick="window.location='table.php';"></td>
                                  <td><input type="submit" name="button2" id="button2" value="Next" class="form-control"  style="width:100px;"></td>
                                </tr>
                            </tbody>
                        </table>                              
                              </td>
                            </tr>
                      
       <tr>
                              <td>
</td>
                            </tr>
                          </table>
        <input type="hidden" name="MM_update" value="form1">
                        </form>
                        <p>&nbsp;</p>
                        
                  </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
<?php
//mysqli_free_result($tablelist);

//mysqli_free_result($Recordset1);
?>
