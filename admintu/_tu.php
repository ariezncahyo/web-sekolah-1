<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AT") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
      <h1>Tata Usaha</h1>
        <table width="200%" border="2" summary="SISWA" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
			  <th>No</th>
              <th>Nama</th>
              <th>NIS</th>
              <th>Kelas</th>
			  <th>Jurusan</th>
			  <th>Tempat Lahir</th>
			  <th>Tanggal Lahir</th>
			  <th>Jenis Kelamin</th>
			  <th>Agama</th>
              <th>Alamat</th>
			  <th>No. Telepon/HP</th>
			  <th>Nama Ayah</th>
			  <th>Alamat Ayah</th>
			  <th>No. Telepon Ayah</th>
			  <th>Nama Ibu</th>
			  <th>Alamat Ibu</th>
			  <th>No. Telepon Ibu</th>
			  <th>Sisa Iuran Bulanan</th>
			  <th>Sisa Dana Bangunan</th>
			  <th>Aksi</th>
            </tr>
			<?php
				include "../config/config.php";
				$ambil_data = mysql_query("select * from tbl_tatausaha");
				$no = 0;
				while($data = mysql_fetch_array($ambil_data)){
			?>
          </thead>
          <tbody>
            <tr>
				<td><?php echo $no = $no + 1;?></td>
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['nis'];?></td>
				<td><?php echo $data['kelas'];?></td>
				<td><?php echo $data['jurusan'];?></td>
				<td><?php echo $data['tempat_lahir'];?></td>
				<td><?php echo $data['tanggal_lahir'];?></td>
				<td><?php echo $data['jenis_kelamin'];?></td>
				<td><?php echo $data['agama'];?></td>
				<td><?php echo $data['alamat'];?></td>
				<td><?php echo $data['telp'];?></td>
				<td><?php echo $data['nama_ayah'];?></td>
				<td><?php echo $data['alamat_ayah'];?></td>
				<td><?php echo $data['telp_ayah'];?></td>
				<td><?php echo $data['nama_ibu'];?></td>
				<td><?php echo $data['alamat_ibu'];?></td>
				<td><?php echo $data['telp_ibu'];?></td>
				<td><?php echo $data['sisa_iuran_bulanan'];?></td>
				<td><?php echo $data['sisa_dana_bangunan'];?></td>
				<td><a href="hapus_tu.php?nis=<?php echo $data['nis'];?>">Hapus</a> | <a href="supdate_tu.php?nis=<?php echo $data['nis'];?>">Edit</a></td>
            </tr>
			<?php } ?>
          </tbody>
        </table>
        <h1>Tambah Siswa</h1>
	<form name="daftar" method="post" action="act_tu.php">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="tempat_lahir"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="text" name="jenis_kelamin"></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><input type="text" name="agama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>No. Telepon/HP</td>
				<td>:</td>
				<td><input type="text" name="telp"></td>
			</tr>
			<tr>
				<td>Nama Ayah</td>
				<td>:</td>
				<td><input type="text" name="nama_ayah"></td>
			</tr>
			<tr>
				<td>Alamat Ayah</td>
				<td>:</td>
				<td><input type="text" name="alamat_ayah"></td>
			</tr>
			<tr>
				<td>No. Telepon/HP Ayah</td>
				<td>:</td>
				<td><input type="text" name="telp_ayah"></td>
			</tr>
			<tr>
				<td>Nama Ibu</td>
				<td>:</td>
				<td><input type="text" name="nama_ibu"></td>
			</tr>
			<tr>
				<td>Alamat Ibu</td>
				<td>:</td>
				<td><input type="text" name="alamat_ibu"></td>
			</tr>
			<tr>
				<td>No. Telepon/HP Ibu</td>
				<td>:</td>
				<td><input type="text" name="telp_ibu"></td>
			</tr>
			<tr>
				<td>Sisa Iuran Bulanan</td>
				<td>:</td>
				<td><input type="text" name="sisa_bulanan"></td>
			</tr>
			<tr>
				<td>Sisa Dana Bangunan</td>
				<td>:</td>
				<td><input type="text" name="sisa_bangunan"></td>
			</tr>
			<tr>
				<td colspan="1" style="text-align:right;">
					<input type="submit" value="Tambahkan">
				</td>
		</table>
	</form>
</body>
</html>
<?php
	}
?>