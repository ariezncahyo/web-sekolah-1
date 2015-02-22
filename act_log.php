<?php
session_start();

include "config/config.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysql_query("select * from tbl_users where username='$username' && password='$password'");
$take_data = mysql_fetch_array($data);
$cek = mysql_num_rows($data);

if($cek == 1){
	
	$_SESSION['username'] = $take_data['username'];
	$_SESSION['password'] = $take_data['password'];
	$_SESSION['flag'] = $take_data['flag'];

	if($take_data['flag'] == SU){header('location:index.php');}else
	if($take_data['flag'] == AH){header('location:index.php');}else
	if($take_data['flag'] == AK){header('location:index.php');}else
	if($take_data['flag'] == AN){header('location:index.php');}else
	if($take_data['flag'] == AU){header('location:index.php');}else
	if($take_data['flag'] == AT){header('location:index.php');}else
	if($take_data['flag'] == US){header('location:index.php');}else
	{echo "Anda bukan siapa - siapa";}
}else{
	echo "Maaf Username dan Password yang anda input salah";
}
?>