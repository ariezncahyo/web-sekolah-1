<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
      <h1>Sarana dan Prasarana</h1>
        <table border="2" summary="Sarana dan Prasarana" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Barang/Asset</th>
              <th>Jumlah</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
			<?php
				include('../config/config.php');
				$ambil_data = mysql_query("select * from tb_prasarana");
				$no = 0;
				while($data = mysql_fetch_array($ambil_data)){
			?>
          </thead>
          <tbody>
            <tr>
				<td><?php echo $no = $no + 1;?></td>
				<td><?php echo $data['n_brg'];?></td>
				<td><?php echo $data['jml'];?></td>
				<td><?php echo $data['ket'];?></td>
                <td><a href="hapus_sa.php?id=<?php echo $data['id'];?>">Hapus</a> | <a href="supdate_sa.php?id=<?php echo $data['id'];?>">Edit</a></td>
            </tr>
			<?php } ?>
          </tbody>
        </table>
	<h1>Pemasukan Data Prasarana</h1>
	<form name="daftar" method="post" action="act_sarana.php">
		<table>
			<tr>
				<td>Nama barang</td>
				<td>:</td>
				<td><input type="text" name="n_brg"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" name="ket"></td>
			</tr>			
			<tr>
				<td colspan="2" style="text-align:right;">
					<input type="submit" value="Tambahkan">
				</td>
		</table>
	</form>

</body>
<?php
	}
?>