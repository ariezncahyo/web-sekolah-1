<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AT") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<?php

include	"../config/config.php";

$username		=	$_POST['username'];
$password		=	md5($_POST['password']);
$flag			=	$_POST['flag'];

$data			=	mysql_query("insert into tbl_users(username,password,flag)values('$username','$password','$flag')");

if($data){header('location:user.php');}else
{echo "Data gagal di INPUT!!!!";}


?>
<?php
	}
?>