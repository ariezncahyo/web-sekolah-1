<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
      <h1>Kepegawaian</h1>
        <table border="2" summary="PEGAWAI" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Title</th>
              <th>NIP</th>
			  <th>Guru Diklat</th>
			  <th>Kopetensi</th>
			  <th>Aksi</th>
            </tr>
			<?php
				include "../config/config.php";
				$ambil_data = mysql_query("select * from tb_kepegawaian");
				$no = 0;
				while($data = mysql_fetch_array($ambil_data)){
			?>
          </thead>
          <tbody>
            <tr>
				<td><?php echo $no = $no + 1;?></td>
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['title'];?></td>
				<td><?php echo $data['NIP'];?></td>
				<td><?php echo $data['guru_diklat'];?></td>
				<td><?php echo $data['Kopetensi'];?></td>
				<td><a href="hapus_peg.php?id=<?php echo $data['id'];?>">Hapus</a> | <a href="supdate_peg.php?id=<?php echo $data['id'];?>">Edit</a></td>
            </tr>
			<?php } ?>
          </tbody>
        </table>
        <h1>Tambah Pegawai</h1>
	<form name="daftar" method="post" action="act_pegawai.php">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr>
				<td>Guru Diklat</td>
				<td>:</td>
				<td><input type="text" name="guru_diklat"></td>
			</tr>
			<tr>
				<td>Kopetensi</td>
				<td>:</td>
				<td><input type="text" name="kopetensi"></td>
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