<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AK") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
      <h1>Data Kesiswaan</h1>
        <table border="2" summary="Sarana dan Prasarana" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>NIS</th>
              <th>Ekstra Kulikuler</th>
              <th>Poin Pelanggaran</th>
              <th>Aksi</th>
            </tr>
			<?php
				include('../config/config.php');
				$ambil_data = mysql_query("select * from tbl_kesiswaan");
				$no = 0;
				while($data = mysql_fetch_array($ambil_data)){
			?>
          </thead>
          <tbody>
            <tr>
				<td><?php echo $no = $no + 1;?></td>
				<td><?php echo $data['nis'];?></td>
				<td><?php echo $data['ekskul'];?></td>
				<td><?php echo $data['poin'];?></td>
                <td><a href="hapus_ke.php?nis=<?php echo $data['nis'];?>">Hapus</a> | <a href="update_ke.php?nis=<?php echo $data['nis'];?>">Edit</a></td>
            </tr>
			<?php } ?>
          </tbody>
        </table>
	<h1>Pemasukan Data Kesiswaan</h1>
	<form name="daftar" method="post" action="act_kes.php">
		<table>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>Ekstra Kulikuler</td>
				<td>:</td>
				<td><input type="text" name="ekskul"></td>
			</tr>
			<tr>
				<td>Poin Pelanggaran</td>
				<td>:</td>
				<td><input type="text" name="poin"></td>
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