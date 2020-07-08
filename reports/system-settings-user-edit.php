<?php include("inc-main.php"); ?>
<?php include("inc-restrictaccess.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fff</title>
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
    <td bgcolor="#000000"><table width="100%" border="0" cellspacing="5" cellpadding="0">
      <tr>
        <td align="left" valign="middle" style="background:url(img/done.jpg) left no-repeat; padding-left:20px; " >Update User</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top">
        <iframe height="300" width="560" style="width:100%;" src="system-settings-user-edit2.php?id=<?php echo @$_GET['id']; ?>" frameborder="0" scrolling="auto" ></iframe>
    </td>
  </tr>
    <tr>
    <td align="center" valign="top"><a href="system-settings-user.php" class="btn btn-primary">Back</a></td>
  </tr>

</table>
</body>
</html>
