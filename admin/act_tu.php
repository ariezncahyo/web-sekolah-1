<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<?php

include	"../config/config.php";

$nama			=	$_POST['nama'];
$nis			=	$_POST['nis'];
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

$data			=	mysql_query("insert into tbl_tatausaha(nama,nis,kelas,jurusan,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat,telp,nama_ayah,alamat_ayah,telp_ayah,nama_ibu,alamat_ibu,telp_ibu,sisa_iuran_bulanan,sisa_dana_bangunan)values('$nama','$nis','$kelas','$jurusan','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat','$telp','$nama_ayah','$alamat_ayah','$telp_ayah','$nama_ibu','$alamat_ibu','$telp_ibu','$sisa_bulanan','$sisa_bangunan')");

if($data){header('location:tu.php');}else
{echo "Data gagal di INPUT!!!!";}

?>
<?php
	}
?>