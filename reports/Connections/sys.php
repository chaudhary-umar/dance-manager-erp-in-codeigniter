<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

if (!isset($_SESSION)) {
  session_start();
}

$hostname_sys = $_SESSION['hostname'];
$database_sys = $_SESSION['database'];
$username_sys = $_SESSION['username'];
$password_sys = $_SESSION['password'];
$sys = mysqli_connect($hostname_sys, $username_sys, $password_sys, $database_sys) or header("Location: admin.php?error=true");

?>