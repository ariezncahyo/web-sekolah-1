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

$nama			=	$_POST['nama'];
$title			=	$_POST['title'];
$nip			=	$_POST['nip'];
$guru_diklat	=	$_POST['guru_diklat'];
$kopetensi		=	$_POST['kopetensi'];

$data			=	mysql_query("insert into tb_kepegawaian(nama,title,NIP,guru_diklat,Kopetensi)values('$nama','$title','$nip','$guru_diklat','$kopetensi')");

if($data){header('location:pegawai.php');}else
{echo "Data gagal di INPUT!!!!";}

?>
<?php
	}
?>