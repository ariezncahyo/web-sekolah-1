<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<?php

include	"../config/config.php";

$nis		=	$_POST['nis'];
$tempat		=	$_POST['tempat'];
$mulai		=	$_POST['mulai'];
$selesai	=	$_POST['selesai'];
$pembimbing	=	$_POST['pembimbing'];
$nilai		=	$_POST['nilai'];

$data	=	mysql_query("insert into tbl_hubin (nis,tempat,mulai,selesai,pembimbing,nilai)values('$nis','$tempat','$mulai','$selesai','$pembimbing','$nilai')");

if($data){header('location:hubin.php');}else
{echo "Data gagal di INPUT!!!!";}


?>
<?php
	}
?>