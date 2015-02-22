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

$ekskul = $_POST['ekskul'];
$poin = $_POST['poin'];


$update = mysql_query("update tbl_kesiswaan set ekskul='$ekskul',poin='$poin' where nis='$id'");

if($update){header('location:kesiswaan.php');}else
{echo "Data gagal di UPDATE !!!!";}
?>
<?php
	}
?>