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
$id = $_POST['id'];

$n_brg = $_POST['n_brg'];
$jml = $_POST['jml'];
$ket = $_POST['ket'];


$update = mysql_query("update tb_prasarana set n_brg='$n_brg',jml='$jml',ket='$ket' where id='$id'");

if($update){header('location:prasarana.php');}else
{echo "Data gagal di UPDATE !!!!";}
?>
<?php
	}
?>