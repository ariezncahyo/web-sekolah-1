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

$judul 		=	$_POST ["judul"];
$berita 	=	$_POST ["berita"];
$idPenulis 	= 	Administrator;


$data		=	mysql_query("insert into tb_article (Judul,Berita,TglBerita,JamBerita,IdPenulis) values ('$judul','$berita',current_date,current_time,'$idPenulis')");

if($data){header('location:berita.php');}else
{echo "Data gagal di INPUT!!!!";}

?> 
<?php
	}
?>