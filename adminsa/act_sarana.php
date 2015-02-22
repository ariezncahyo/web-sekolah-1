<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AN") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<?php

include	"../config/config.php";

$n_brg		=	$_POST['n_brg'];
$jumlah		=	$_POST['jumlah'];
$ket		=	$_POST['ket'];

$data			=	mysql_query("insert into tb_prasarana(n_brg,jml,ket)values('$n_brg','$jumlah','$ket')");

if($data){header('location:prasarana.php');}else
{echo "Data gagal di INPUT!!!!";}


?>
<?php
	}
?>