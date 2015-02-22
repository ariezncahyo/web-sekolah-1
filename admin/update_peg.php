<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
<form name="update" action="act_update_peg.php" method="post">
<table>
<tr>
<td colspan="2" style="font-weight:bold;font-size:25px;text-align:center;">UPDATE PEGAWAI</td>
</tr>
<?php
include "../config/config.php";
$id = $_GET['id'];
$ambil_data = mysql_query("select * from tb_kepegawaian where id='$id'");
while($data = mysql_fetch_array($ambil_data)){
?>
<tr>
<input type="hidden" name="id" value="<?php echo $data['id'];?>">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><input type="text" name="title" value="<?php echo $data['title'];?>"></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><input type="text" name="nip" value="<?php echo $data['NIP'];?>"></td>
			</tr>
			<tr>
				<td>Guru Diklat</td>
				<td>:</td>
				<td><input type="text" name="guru_diklat" value="<?php echo $data['guru_diklat'];?>"></td>
			</tr>
			<tr>
				<td>Kopetensi</td>
				<td>:</td>
				<td><input type="text" name="kopetensi" value="<?php echo $data['Kopetensi'];?>"</td>
			</tr>
<?php } ?>
<tr><td colspan="2" style="text-align:right"><input type="submit" value="Update"></td></tr>
</table>
</form>
</body>
</html>
<?php
	}
?>