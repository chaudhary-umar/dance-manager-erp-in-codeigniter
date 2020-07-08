
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_saha = "localhost";
$database_saha = "ccschool_ccs";
$username_saha = "ccschool_brian";
$password_saha = "brian";
$saha = mysqli_connect($hostname_saha, $username_saha, $password_saha, $database_saha) or trigger_error(mysqli_error($saha),E_USER_ERROR);
?>
