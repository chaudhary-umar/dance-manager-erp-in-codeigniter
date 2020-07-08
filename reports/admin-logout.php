<?php include("inc-main.php"); ?>
<?php
// *** Logout the current user.
$logoutGoTo = "index.php";
if (!isset($_SESSION)) {
  session_start();
}
$_SESSION['MM_Username'] = NULL;
$_SESSION['MM_UserGroup'] = NULL;
unset($_SESSION['MM_Username']);
unset($_SESSION['MM_UserGroup']);

$_SESSION['hostname']=NULL;
$_SESSION['database']=NULL;
$_SESSION['username']=NULL;
$_SESSION['password']=NULL;
$_SESSION['table']=NULL;
$_SESSION['columns']=NULL;
$_SESSION['columnsHeaders']=NULL;
$_SESSION['groups']=NULL;
$_SESSION['groupsTotal']=NULL;
$_SESSION['style']=NULL;

if ($logoutGoTo != "") {header("Location: $logoutGoTo");
exit;
}
?>
