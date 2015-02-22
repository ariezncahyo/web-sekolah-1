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

$judul 		=	$_POST ["judul"];
$berita 	=	$_POST ["berita"];


$update = mysql_query("update tb_article set 
Judul='$judul',
Berita='$berita'
where IdBerita='$id'");

if($update){header('location:berita.php');}else
{echo "Data gagal di UPDATE !!!!";}
?>
<?php
	}
?>