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
	header("Location: table.php");
	exit;
}

if($_SESSION['columns']==""){
	header("Location: columns.php");
	exit;
}
if($_SESSION['style']==""){
	header("Location: settings.php");
	exit;
}



$coluMs = explode(",", $_SESSION['columnsHeaders']);
$GroupComs = explode(",", $_SESSION['groupsTotal']);
//echo $_SESSION['groupsTotal']."<br>";
//echo count($GroupComs);

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

mysqli_select_db($sys, $database_sys);
$query_datastyle2 = "SELECT $columns FROM $table $group";
$datastyle2 = mysqli_query($sys, $query_datastyle2) or die(mysqli_error($sys));
$row_datastyle2 = mysqli_fetch_assoc($datastyle2);
$totalRows_datastyle2 = mysqli_num_rows($datastyle2);

mysqli_select_db($sys, $database_sys);
$query_datastyle3 = "SELECT $columns FROM $table $group";
$datastyle3 = mysqli_query($sys, $query_datastyle3) or die(mysqli_error($sys));
$row_datastyle3 = mysqli_fetch_assoc($datastyle3);
$totalRows_datastyle3 = mysqli_num_rows($datastyle3);

mysqli_select_db($sys, $database_sys);
$query_datastyle4 = "SELECT $columns FROM $table $group";
$datastyle4 = mysqli_query($sys, $query_datastyle4) or die(mysqli_error($sys));
$row_datastyle4 = mysqli_fetch_assoc($datastyle4);
$totalRows_datastyle4 = mysqli_num_rows($datastyle4);

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
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
                <li>
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
                <li class="active">
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
                        <h1 class="h1">Print or Download Report</h1>
                        <h3>Print Report with Selectd Style for Selected Report. <?php echo $totalRows_datalist; ?> Data found at selected table.</h3>
                        <p class="text-primary">Please get your Report and Chart for <strong><?php echo $_SESSION['table']; ?></strong>.</p>
                        <form name="form1" method="POST" action="">
        <table class="table table-striped table-bordered table-hover">
                            <tr>
                              <td>
<table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Report Style</th>
                                    <th width="50"><input type="button" name="button2" id="button2" value="Previous" class="form-control"  style="width:100px; float:right;" onClick="window.location='settings.php';"></th>
                                </tr>
                            </thead>
                            <tbody>
<tr>
  <td colspan="2" style="background:#FFF; padding:10px; ">
<?php if($_SESSION['style']=="1" || $_SESSION['style']=="2"){?>  
<?php if($_SESSION['style']=="1"){?>    
    <div class="table-responsive" style="width:1000px; height:350px; overflow:auto; overflow-x:auto; padding:10px; margin:10px;">
            <table class="table table-striped table-bordered table-hover">
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
            </div>
<?php } ?>
    <!-- /.col-lg-6 -->
<?php if($_SESSION['style']=="2"){?>        
    <div class="table-responsive" style="width:1000px; height:350px; overflow:auto; overflow-x:auto; padding:10px; margin:10px;">
            <table class="table">
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
                    <td><?php echo $row_datastyle2[$value]; ?></td>
  <?php }?>                
                    </tr>
                  <?php } while ($row_datastyle2 = mysqli_fetch_assoc($datastyle2)); ?>
                </tbody>
              </table>
            </div>
<?php }?>      
    <!-- /.col-lg-6 -->
<?php }?>
<?php if($_SESSION['style']=="3" || $_SESSION['style']=="4"){?>  
<?php if($_SESSION['style']=="3"){?>    
                <div class="table-responsive" style="width:1000px; height:350px; overflow:auto; overflow-x:auto; padding:10px; margin:10px;">
                                <table class="table table-striped">
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
                    <td><?php echo $row_datastyle3[$value]; ?></td>
  <?php }?>                
                    </tr>
                  <?php } while ($row_datastyle3 = mysqli_fetch_assoc($datastyle3)); ?>
                                        
                                    </tbody>
                                </table>
                            </div>
<?php }?>                
                <!-- /.col-lg-6 -->
<?php if($_SESSION['style']=="4"){?>    
                <div class="table-responsive" style="width:1000px; height:350px; overflow:auto; overflow-x:auto; padding:10px; margin:10px;">
                                <table class="table table-bordered">
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
                    <td><?php echo $row_datastyle4[$value]; ?></td>
  <?php }?>                
                    </tr>
                  <?php } while ($row_datastyle4 = mysqli_fetch_assoc($datastyle4)); ?>
                                        
                                    </tbody>
                                </table>
                            </div>
<?php }?>                
                <!-- /.col-lg-6 -->
<?php }?>
    
    </td>
</tr>
<tr>
  <td colspan="2" style="background:#FFF; padding:10px; ">
  <a href="finish-print-<?php echo $_SESSION['style']; ?>.php" target="_blank" class="btn btn-primary">Print</a>
  
  </td>
</tr>
<tr>
  <td colspan="2" style="background:#FFF; padding:10px; ">
  
<?php if($_SESSION['groups']!="" && count($GroupComs)==1){?>  
<div class="col-lg-4 col-md-4" style="width:450px;">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                               Pie Chart
                            </div>
                            <div class="panel-body">
                                <p><iframe width="100%" height="250" src="finish-chart-1.php"  scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></p>
                            </div>
                           <div class="panel-heading"><a href="finish-chart-1-large.php" target="_blank" class="btn btn-info">View</a></div> 
                        </div>
                    </div>

<div class="col-lg-4 col-md-4" style="width:450px;">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                               Column Chart
                            </div>
                            <div class="panel-body">
                                <p><iframe width="100%" height="250" src="finish-chart-2.php"  scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></p>
                            </div>
                           <div class="panel-heading"><a href="finish-chart-2-large.php" target="_blank" class="btn btn-info">View</a></div> 
                        </div>
                    </div>
<?php }?>  
  </td>
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
//mysqli_free_result($datastyle1);

//mysqli_free_result($tablelist);

//mysqli_free_result($Recordset1);
?>
