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
$sunda		=	$_POST['sunda'];
$senbud		=	$_POST['senbud'];
$ips		=	$_POST['ips'];
$produktif1	=	$_POST['produktif1'];
$produktif2	=	$_POST['produktif2'];
$produktif3	=	$_POST['produktif3'];
$produktif4	=	$_POST['produktif4'];
$produktif5	=	$_POST['produktif5'];

$update = mysql_query("update tbl_kurikulum_s3 set 
agama3='$agama',
pkn3='$pkn', 
indonesia3='$indonesia',
penjaskes3='$penjaskes', 
inggris3='$inggris',
matematika3='$matematika', 
ipa3='$ipa',
kkpi3='$kkpi', 
kwu3='$kwu',
fisika3='$fisika', 
kimia3='$kimia',
sunda3='$sunda', 
senibudaya3='$senbud',
ips3='$ips',
produktif13='$produktif1', 
produktif23='$produktif2',
produktif33='$produktif3', 
produktif43='$produktif4',
produktif53='$produktif5'
where nis='$id'");

if($update){header('location:kurikulum3.php');}else
{echo "Data gagal di UPDATE !!!!";}
?>
<?php
	}
?>