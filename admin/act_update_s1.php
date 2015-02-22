<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
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
$sunda		=	$_POST['sunda'];
$plh		=	$_POST['plh'];
$produktif1	=	$_POST['produktif1'];
$produktif2	=	$_POST['produktif2'];
$produktif3	=	$_POST['produktif3'];
$produktif4	=	$_POST['produktif4'];
$produktif5	=	$_POST['produktif5'];

$update = mysql_query("update tbl_kurikulum_s1 set 
agama1='$agama',
pkn1='$pkn', 
indonesia1='$indonesia',
penjaskes1='$penjaskes', 
inggris1='$inggris',
matematika1='$matematika', 
ipa1='$ipa',
kkpi1='$kkpi', 
kwu1='$kwu',
fisika1='$fisika', 
kimia1='$kimia',
sunda1='$sunda', 
plh1='$plh',
produktif11='$produktif1', 
produktif21='$produktif2',
produktif31='$produktif3', 
produktif41='$produktif4',
produktif51='$produktif5'
where nis='$id'");

if($update){header('location:kurikulum1.php');}else
{echo "Data gagal di UPDATE !!!!";}
?>
<?php
	}
?>