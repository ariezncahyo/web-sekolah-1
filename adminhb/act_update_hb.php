<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AH") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<?php
include "../config/config.php";
$id = $_POST['nis'];

$tempat		=	$_POST['tempat'];
$mulai		=	$_POST['mulai'];
$selesai	=	$_POST['selesai'];
$pembimbing	=	$_POST['pembimbing'];
$nilai		=	$_POST['nilai'];


$update = mysql_query("update tbl_hubin set 
tempat='$tempat',
mulai='$mulai',
selesai='$selesai',
pembimbing='$pembimbing',
nilai='$nilai'
 where nis='$id'");

if($update){header('location:hubin.php');}else
{echo "Data gagal di UPDATE !!!!";}
?>
<?php
	}
?>