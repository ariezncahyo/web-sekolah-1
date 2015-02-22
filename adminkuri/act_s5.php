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
$senbud		=	$_POST['senbud'];
$ips		=	$_POST['ips'];
$jepang		=	$_POST['jepang'];
$produktif1	=	$_POST['produktif1'];
$produktif2	=	$_POST['produktif2'];
$produktif3	=	$_POST['produktif3'];
$produktif4	=	$_POST['produktif4'];
$produktif5	=	$_POST['produktif5'];

$data			=	mysql_query("INSERT INTO `tbl_kurikulum_s5`(`nis`, `agama5`, `pkn5`, `indonesia5`, `penjaskes5`, `inggris5`, `matematika5`, `ipa5`, `kkpi5`, `kwu5`, `fisika5`, `kimia5`, `senibudaya5`, `ips5`, `jepang5`, `produktif15`, `produktif25`, `produktif35`, `produktif45`, `produktif55`) VALUES ('$nis','$agama','$pkn','$indonesia','$penjaskes','$inggris','$matematika','$ipa','$kkpi','$kwu','$fisika','$kimia','$senbud','$ips','$jepang','$produktif1','$produktif2','$produktif3','$produktif4','$produktif5')");

if($data){header('location:kurikulum5.php');}else
{echo "Data gagal di INPUT!!!!";}


?>
<?php
	}
?>