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

$data			=	mysql_query("INSERT INTO `tbl_kurikulum_s1`(`nis`, `agama1`, `pkn1`, `indonesia1`, `penjaskes1`, `inggris1`, `matematika1`, `ipa1`, `kkpi1`, `kwu1`, `fisika1`, `kimia1`, `sunda1`, `plh1`, `produktif11`, `produktif21`, `produktif31`, `produktif41`, `produktif51`) VALUES ('$nis','$agama','$pkn','$indonesia','$penjaskes','$inggris','$matematika','$ipa','$kkpi','$kwu','$fisika','$kimia','$sunda','$plh','$produktif1','$produktif2','$produktif3','$produktif4','$produktif5')");

if($data){header('location:kurikulum1.php');}else
{echo "Data gagal di INPUT!!!!";}


?>
<?php
	}
?>