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

if(@$_GET['stt']==""){
	$stt=0;
	$lim=8;
}else{
	$stt=@$_GET['stt'];
	$lim=8;
}

mysqli_select_db($sys, $database_sys); 
$query_total = "SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '$database_sys'";
$total = mysqli_query($sys, $query_total) or die(mysqli_error($sys));
$row_total = mysqli_fetch_assoc($total);
$totalRows_total = mysqli_num_rows($total);

mysqli_select_db($sys, $database_sys);
$query_tablelist = "SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '$database_sys' LIMIT $stt,$lim";
$tablelist = mysqli_query($sys, $query_tablelist) or die(mysqli_error($sys));
$row_tablelist = mysqli_fetch_assoc($tablelist);
$totalRows_tablelist = mysqli_num_rows($tablelist);

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
                <li class="active">
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
                        <h1 class="h1">Data Source</h1>
                        <h3>data Table from Database</h3>
                        <p class="text-primary">Please select data source or table from the connected database.</p>
                        <form name="form1" method="POST" action="<?php echo $editFormAction; ?>">
        <table class="table table-striped table-bordered table-hover">
                            <tr>
                              <td>
<table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Table Name</th>
                                    <th width="100">Data Count</th>
                                    <th width="50"><input type="button" name="button2" id="button2" value="Previous" class="form-control"  style="width:100px; float:right;" onClick="window.location='admin.php';"></th>
                                </tr>
                            </thead>
                            <tbody>
<?php $i=$stt;?>                            
                                <?php do { ?>
<?php 
mysqli_select_db($sys, $database_sys);
$query_totalRecords = "SELECT FOUND_ROWS() FROM `".$row_tablelist['TABLE_NAME']."`";
$totalRecords = mysqli_query($sys, $query_totalRecords) or die(mysqli_error($sys));
$row_totalRecords = mysqli_fetch_assoc($totalRecords);
$totalRows_totalRecords = mysqli_num_rows($totalRecords);

$i=$i+1;
?>                                
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td style="font-size:16px;"><?php echo $row_tablelist['TABLE_NAME']; ?></td>
                                    <td><?php echo $totalRows_totalRecords; ?></td>
                                    <td>
                                    <?php if($totalRows_totalRecords==0){?>
                                    <a href="#" class="btn btn-block">Select</a>
                                    <?php }else{?>
                                    <a href="table-select.php?id=<?php echo base64_encode($row_tablelist['TABLE_NAME']); ?>" class="btn btn-primary">Select</a>
                                    <?php }?>
                                    </td>
                                </tr>
                                <?php } while ($row_tablelist = mysqli_fetch_assoc($tablelist)); ?>
                                
                            </tbody>
                        </table>                              
                              </td>
                            </tr>
                           <tr>
                              <td><!-- Paging Div -->    
<?php include("func.paging.php"); ?>
<!-- End Paging Div -->	
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
