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

$no = $_GET['id'];
$hapus = mysql_query("DELETE from tb_prasarana where id='$no'");

if($hapus){header('location:prasarana.php');}else{echo "Data gagal dihapus";}
?>
<?php
	}
?>