<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
<form name="update" action="act_update_tu.php" method="post">
<table>
<tr>
<td colspan="2" style="font-weight:bold;font-size:25px;text-align:center;">UPDATE DATA SISWA</td>
</tr>
<?php
include "../config/config.php";
$id = $_GET['nis'];
$ambil_data = mysql_query("select * from tbl_tatausaha where nis='$id'");
while($data = mysql_fetch_array($ambil_data)){
?>
<tr>
	<td colspan="3">PERUBAHAN DATA UNTUK NIS <?php echo $data['nis'];?></td>
<tr>
<tr>
<input type="hidden" name="nis" value="<?php echo $data['nis'];?>">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas" value="<?php echo $data['kelas'];?>"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><input type="text" name="jurusan" value="<?php echo $data['jurusan'];?>"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir'];?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'];?>"></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><input type="text" name="agama" value="<?php echo $data['agama'];?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td>
			</tr>
			<tr>
				<td>No. Telepon/HP</td>
				<td>:</td>
				<td><input type="text" name="telp" value="<?php echo $data['telp'];?>"></td>
			</tr>
			<tr>
				<td>Nama Ayah</td>
				<td>:</td>
				<td><input type="text" name="nama_ayah" value="<?php echo $data['nama_ayah'];?>"></td>
			</tr>
			<tr>
				<td>Alamat Ayah</td>
				<td>:</td>
				<td><input type="text" name="alamat_ayah" value="<?php echo $data['alamat_ayah'];?>"></td>
			</tr>
			<tr>
				<td>No. Telepon/HP Ayah</td>
				<td>:</td>
				<td><input type="text" name="telp_ayah" value="<?php echo $data['telp_ayah'];?>"></td>
			</tr>
			<tr>
				<td>Nama Ibu</td>
				<td>:</td>
				<td><input type="text" name="nama_ibu" value="<?php echo $data['nama_ibu'];?>"></td>
			</tr>
			<tr>
				<td>Alamat Ibu</td>
				<td>:</td>
				<td><input type="text" name="alamat_ibu" value="<?php echo $data['alamat_ibu'];?>"></td>
			</tr>
			<tr>
				<td>No. Telepon/HP Ibu</td>
				<td>:</td>
				<td><input type="text" name="telp_ibu" value="<?php echo $data['telp_ibu'];?>"></td>
			</tr>
			<tr>
				<td>Sisa Iuran Bulanan</td>
				<td>:</td>
				<td><input type="text" name="sisa_bulanan" value="<?php echo $data['sisa_iuran_bulanan'];?>"></td>
			</tr>
			<tr>
				<td>Sisa Dana Bangunan</td>
				<td>:</td>
				<td><input type="text" name="sisa_bangunan" value="<?php echo $data['sisa_dana_bangunan'];?>"></td>
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