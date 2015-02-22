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

$update = mysql_query("update tbl_kurikulum_s2 set 
agama2='$agama',
pkn2='$pkn', 
indonesia2='$indonesia',
penjaskes2='$penjaskes', 
inggris2='$inggris',
matematika2='$matematika', 
ipa2='$ipa',
kkpi2='$kkpi', 
kwu2='$kwu',
fisika2='$fisika', 
kimia2='$kimia',
sunda2='$sunda', 
plh2='$plh',
produktif12='$produktif1', 
produktif22='$produktif2',
produktif32='$produktif3', 
produktif42='$produktif4',
produktif52='$produktif5'
where nis='$id'");

if($update){header('location:kurikulum2.php');}else
{echo "Data gagal di UPDATE !!!!";}
?>
<?php
	}
?>