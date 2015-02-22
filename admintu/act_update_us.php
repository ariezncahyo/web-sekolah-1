<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AT") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<?php
include "../config/config.php";
$id = $_POST['username'];

$password = md5($_POST['password']);
$flag = $_POST['flag'];


$update = mysql_query("update tbl_users set password='$password',flag='$flag' where username='$id'");

if($update){header('location:user.php');}else
{echo "Data gagal di UPDATE !!!!";}
?>
<?php
	}
?>