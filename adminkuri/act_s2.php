<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<?php

include	"../config/config.php";

$nis		=	$_POST['nis'];
$agama		=	$_POST['agama'];
$pkn		=	$_POST['pkn'];
$indonesia	=	$_POST['indonesia'];
$penjaskes	=	$_POST['penjaskes'];
$inggris	=	$_POST['inggris'];
$matematika	=	$_POST['matematika'];
$ipa		=	$_POST['ipa'];
$kkpi		=	$_POST['kkpi'];
$kwu		=	$_POST['kwu'];
$fisika		=	$_POST['fisika'];
$kimia		=	$_POST['kimia'];
$sunda		=	$_POST['sunda'];
$plh		=	$_POST['plh'];
$produktif1	=	$_POST['produktif1'];
$produktif2	=	$_POST['produktif2'];
$produktif3	=	$_POST['produktif3'];
$produktif4	=	$_POST['produktif4'];
$produktif5	=	$_POST['produktif5'];

$data			=	mysql_query("INSERT INTO `tbl_kurikulum_s2`(`nis`, `agama2`, `pkn2`, `indonesia2`, `penjaskes2`, `inggris2`, `matematika2`, `ipa2`, `kkpi2`, `kwu2`, `fisika2`, `kimia2`, `sunda2`, `plh2`, `produktif12`, `produktif22`, `produktif32`, `produktif42`, `produktif52`) VALUES ('$nis','$agama','$pkn','$indonesia','$penjaskes','$inggris','$matematika','$ipa','$kkpi','$kwu','$fisika','$kimia','$sunda','$plh','$produktif1','$produktif2','$produktif3','$produktif4','$produktif5')");

if($data){header('location:kurikulum2.php');}else
{echo "Data gagal di INPUT!!!!";}


?>
<?php
	}
?>