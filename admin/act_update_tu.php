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
$nis = $_POST['nis'];

$nama			=	$_POST['nama'];
$kelas			=	$_POST['kelas'];
$jurusan		=	$_POST['jurusan'];
$tempat_lahir	=	$_POST['tempat_lahir'];
$tanggal_lahir	=	$_POST['tanggal_lahir'];
$jenis_kelamin	=	$_POST['jenis_kelamin'];
$agama			=	$_POST['agama'];
$alamat			=	$_POST['alamat'];
$telp			=	$_POST['telp'];
$nama_ayah		=	$_POST['nama_ayah'];
$alamat_ayah	=	$_POST['alamat_ayah'];
$telp_ayah		=	$_POST['telp_ayah'];
$nama_ibu		=	$_POST['nama_ibu'];
$alamat_ibu		=	$_POST['alamat_ibu'];
$telp_ibu		=	$_POST['telp_ibu'];
$sisa_bulanan	=	$_POST['sisa_bulanan'];
$sisa_bangunan	=	$_POST['sisa_bangunan'];

$update = mysql_query("update tbl_tatausaha set 
nama='$nama',
kelas='$kelas',
jurusan='$jurusan',
tempat_lahir='$tempat_lahir',
tanggal_lahir='$tanggal_lahir', 
jenis_kelamin='$jenis_kelamin',
agama='$agama',
alamat='$alamat',
telp='$telp',
nama_ayah='$nama_ayah',
alamat_ayah='$alamat_ayah',
telp_ayah='$telp_ayah',
nama_ibu='$nama_ibu',
alamat_ibu='$alamat_ibu',
telp_ibu='$telp_ibu',
sisa_iuran_bulanan='$sisa_bulanan',
sisa_dana_bangunan='$sisa_bangunan'
where nis='$nis'");

if($update){header('location:tu.php');}else
{echo "Data gagal di UPDATE !!!!";}
?>
<?php
	}
?>