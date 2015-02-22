<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AK") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<?php

include	"../config/config.php";

$nis		=	$_POST['nis'];
$ekskul		=	$_POST['ekskul'];
$poin		=	$_POST['poin'];

$data			=	mysql_query("insert into tbl_kesiswaan(nis,ekskul,poin)values('$nis','$ekskul','$poin')");

if($data){header('location:kesiswaan.php');}else
{echo "Data gagal di INPUT!!!!";}


?>
<?php
	}
?>