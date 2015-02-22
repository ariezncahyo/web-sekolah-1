<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
      <h1>Data Prakerin</h1>
        <table border="2" summary="Hubin" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>NIS</th>
              <th>Tempat</th>
              <th>Mulai</th>
              <th>Selesai</th>
			  <th>Pembimbing</th>
              <th>Nilai</th>
			  <th>Aksi</th>
            </tr>
			<?php
				include('../config/config.php');
				$ambil_data = mysql_query("select * from tbl_hubin");
				$no = 0;
				while($data = mysql_fetch_array($ambil_data)){
			?>
          </thead>
          <tbody>
            <tr>
				<td><?php echo $no = $no + 1;?></td>
				<td><?php echo $data['nis'];?></td>
				<td><?php echo $data['tempat'];?></td>
				<td><?php echo $data['mulai'];?></td>
				<td><?php echo $data['selesai'];?></td>
				<td><?php echo $data['pembimbing'];?></td>
				<td><?php echo $data['nilai'];?></td>
                <td><a href="hapus_hb.php?nis=<?php echo $data['nis'];?>">Hapus</a> | <a href="update_hb.php?nis=<?php echo $data['nis'];?>">Edit</a></td>
            </tr>
			<?php } ?>
          </tbody>
        </table>
	<h1>Pemasukan Data Prakerin</h1>
	<form name="daftar" method="post" action="act_hb.php">
		<table>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>Tempat</td>
				<td>:</td>
				<td><input type="text" name="tempat"></td>
			</tr>
			<tr>
				<td>Tanggal Mulai</td>
				<td>:</td>
				<td><input type="text" name="mulai"></td>
			</tr>	
			<tr>
				<td>Tanggal Selesai</td>
				<td>:</td>
				<td><input type="text" name="selesai"></td>
			</tr>
			<tr>
				<td>Pembimbing</td>
				<td>:</td>
				<td><input type="text" name="pembimbing"></td>
			</tr>
			<tr>
				<td>Nilai</td>
				<td>:</td>
				<td><input type="text" name="nilai"></td>
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