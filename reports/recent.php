<?php include("inc-main.php"); ?>
<?php require_once('Connections/saha.php'); ?>
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

if(@$_GET['stt']==""){
	$stt=0;
	$lim=9;
}else{
	$stt=@$_GET['stt'];
	$lim=9;
}


$dBpass=base64_encode($password_sys);
$dBUser=base64_encode($username_sys);

mysqli_select_db($saha, $database_saha);
$query_total = "SELECT * FROM recent WHERE recent.databasehost='$hostname_sys'  AND recent.database='$database_sys' AND recent.databaseuser='$dBUser'  AND recent.databasepass='$dBpass' ORDER BY recent.id DESC";
$total = mysqli_query($saha, $query_total) or die(mysqli_error($saha));
$row_total = mysqli_fetch_assoc($total);
$totalRows_total = mysqli_num_rows($total);



mysqli_select_db($saha, $database_saha);
$query_recent = "SELECT * FROM recent WHERE recent.databasehost='$hostname_sys'  AND recent.database='$database_sys' AND recent.databaseuser='$dBUser'  AND recent.databasepass='$dBpass' ORDER BY recent.id DESC  LIMIT $stt,$lim";
$recent = mysqli_query($saha, $query_recent) or die(mysqli_error($saha));
$row_recent = mysqli_fetch_assoc($recent);
$totalRows_recent = mysqli_num_rows($recent);


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
                        <h1 class="h1">Recent Reports</h1>
                        <h3>Reports from Recent History </h3>
                        <p class="text-primary">Please find your recent history for this database</strong>.</p>
                        <form name="form1" method="POST" action="<?php echo $editFormAction; ?>">
        <table class="table table-striped table-bordered table-hover">
                            <tr>
                              <td>
<table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="50" height="50">#</th>
                                    <th>Report Name                                      </th>
                                    <th>Date</th>
                                    <th>Table</th>
                                    <th>Columns</th>
                                    <th>Grouped by</th>
                                    <th width="50">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
<?php if($totalRows_recent>0){?>
<?php $i=0;?>                            
                                <?php do { ?>
<?php 

$i=$i+1;

$GroupComs = explode(",", $row_recent['columns']);

?>                                
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td style="font-size:16px;"><?php echo $row_recent['name']; ?></td>
                                    <td><?php echo date("Y-m-d H:i:s", $row_recent['date']); ?></td>
                                    <td><?php echo $row_recent['tables']; ?></td>
                                    <td><?php echo count($GroupComs); ?></td>
                                    <td><?php echo $row_recent['group2']; ?></td>
                                    <td>
                                    <a href="recent-select.php?id=<?php echo base64_encode($row_recent['id']); ?>" class="btn btn-primary">View Report</a>
                                    </td>
                                </tr>
                                <?php } while ($row_recent = mysqli_fetch_assoc($recent)); ?>
<?php }else{?>                                
                                <tr>
                                  <td colspan="7">No Recent Reports found for this database !</td>
                                </tr>
<?php }?>                                
                            </tbody>
                        </table>   
                        

<!-- Paging Div -->    
<?php include("func.paging.php"); ?>
<!-- End Paging Div -->	
                                                   
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
//mysqli_free_result($recent);

//mysqli_free_result($tablelist);

//mysqli_free_result($Recordset1);
?>
