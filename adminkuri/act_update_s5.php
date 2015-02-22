<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<?php
include "../config/config.php";
$id = $_POST['nis'];

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

$update = mysql_query("update tbl_kurikulum_s5 set 
agama5='$agama',
pkn5='$pkn', 
indonesia5='$indonesia',
penjaskes5='$penjaskes', 
inggris5='$inggris',
matematika5='$matematika', 
ipa5='$ipa',
kkpi5='$kkpi', 
kwu5='$kwu',
fisika5='$fisika', 
kimia5='$kimia',
senibudaya5='$senbud',
ips5='$ips',
jepang5='$jepang', 
produktif15='$produktif1', 
produktif25='$produktif2',
produktif35='$produktif3', 
produktif45='$produktif4',
produktif55='$produktif5'
where nis='$id'");

if($update){header('location:kurikulum5.php');}else
{echo "Data gagal di UPDATE !!!!";}
?>
<?php
	}
?>