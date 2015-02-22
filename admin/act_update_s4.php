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
$senbud		=	$_POST['senbud'];
$ips		=	$_POST['ips'];
$produktif1	=	$_POST['produktif1'];
$produktif2	=	$_POST['produktif2'];
$produktif3	=	$_POST['produktif3'];
$produktif4	=	$_POST['produktif4'];
$produktif5	=	$_POST['produktif5'];

$update = mysql_query("update tbl_kurikulum_s4 set 
agama4='$agama',
pkn4='$pkn', 
indonesia4='$indonesia',
penjaskes4='$penjaskes', 
inggris4='$inggris',
matematika4='$matematika', 
ipa4='$ipa',
kkpi4='$kkpi', 
kwu4='$kwu',
fisika4='$fisika', 
kimia4='$kimia',
sunda4='$sunda', 
senibudaya4='$senbud',
ips4='$ips',
produktif14='$produktif1', 
produktif24='$produktif2',
produktif34='$produktif3', 
produktif44='$produktif4',
produktif54='$produktif5'
where nis='$id'");

if($update){header('location:kurikulum4.php');}else
{echo "Data gagal di UPDATE !!!!";}
?>
<?php
	}
?>