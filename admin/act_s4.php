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
$senbud		=	$_POST['senbud'];
$ips		=	$_POST['ips'];
$produktif1	=	$_POST['produktif1'];
$produktif2	=	$_POST['produktif2'];
$produktif3	=	$_POST['produktif3'];
$produktif4	=	$_POST['produktif4'];
$produktif5	=	$_POST['produktif5'];

$data			=	mysql_query("INSERT INTO `tbl_kurikulum_s4`(`nis`, `agama4`, `pkn4`, `indonesia4`, `penjaskes4`, `inggris4`, `matematika4`, `ipa4`, `kkpi4`, `kwu4`, `fisika4`, `kimia4`, `sunda4`, `senibudaya4`, `ips4`, `produktif14`, `produktif24`, `produktif34`, `produktif44`, `produktif54`) VALUES ('$nis','$agama','$pkn','$indonesia','$penjaskes','$inggris','$matematika','$ipa','$kkpi','$kwu','$fisika','$kimia','$sunda','$senbud','$ips','$produktif1','$produktif2','$produktif3','$produktif4','$produktif5')");

if($data){header('location:kurikulum4.php');}else
{echo "Data gagal di INPUT!!!!";}


?>
<?php
	}
?>