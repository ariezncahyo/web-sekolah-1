<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
      <h1>Data Nilai Semester 5</h1>
        <table width="150%" border="2" summary="Semester 5" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>NIS</th>
              <th>P. Agama</th>
              <th>Pkn</th>
              <th>B. Indonesia</th>
			  <th>Penjaskes</th>
              <th>B. Inggris</th>
              <th>Matematika</th>
              <th>IPA</th>
              <th>KKPI</th>
			  <th>Kewirausahaan</th>
              <th>Fisika</th>
			  <th>Kimia</th>
              <th>Seni Budaya</th>
			  <th>IPS</th>
			  <th>B. Jepang</th>
              <th>Produktif1</th>
			  <th>Produktif2</th>
			  <th>Produktif3</th>
			  <th>Produktif4</th>
			  <th>Produktif5</th>
			  <th>Aksi</th>
            </tr>
			<?php
				include('../config/config.php');
				$ambil_data = mysql_query("select * from tbl_kurikulum_s5");
				$no = 0;
				while($data = mysql_fetch_array($ambil_data)){
			?>
          </thead>
          <tbody>
            <tr>
				<td><?php echo $no = $no + 1;?></td>
				<td><?php echo $data['nis'];?></td>
				<td><?php echo $data['agama5'];?></td>
				<td><?php echo $data['pkn5'];?></td>
				<td><?php echo $data['indonesia5'];?></td>
				<td><?php echo $data['penjaskes5'];?></td>
				<td><?php echo $data['inggris5'];?></td>
				<td><?php echo $data['matematika5'];?></td>
				<td><?php echo $data['ipa5'];?></td>
				<td><?php echo $data['kkpi5'];?></td>
				<td><?php echo $data['kwu5'];?></td>
				<td><?php echo $data['fisika5'];?></td>
				<td><?php echo $data['kimia5'];?></td>
				<td><?php echo $data['senibudaya5'];?></td>
				<td><?php echo $data['ips5'];?></td>
				<td><?php echo $data['jepang5'];?></td>
				<td><?php echo $data['produktif15'];?></td>
				<td><?php echo $data['produktif25'];?></td>
				<td><?php echo $data['produktif35'];?></td>
				<td><?php echo $data['produktif45'];?></td>
				<td><?php echo $data['produktif55'];?></td>
                <td><a href="hapus_s5.php?nis=<?php echo $data['nis'];?>">Hapus</a> | <a href="update_s5.php?nis=<?php echo $data['nis'];?>">Edit</a></td>
            </tr>
			<?php } ?>
          </tbody>
        </table>
	<h1>Pemasukan Data Nilai Semester 5</h1>
	<form name="daftar" method="post" action="act_s5.php">
		<table>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>P. Agama</td>
				<td>:</td>
				<td><input type="text" name="agama"></td>
			</tr>
			<tr>
				<td>PKn</td>
				<td>:</td>
				<td><input type="text" name="pkn"></td>
			</tr>
			<tr>
				<td>B. Indonesia</td>
				<td>:</td>
				<td><input type="text" name="indonesia"></td>
			</tr>
			<tr>
				<td>Penjaskes</td>
				<td>:</td>
				<td><input type="text" name="penjaskes"></td>
			</tr>
			<tr>
				<td>B. Inggris</td>
				<td>:</td>
				<td><input type="text" name="inggris"></td>
			</tr>
			<tr>
				<td>Matematika</td>
				<td>:</td>
				<td><input type="text" name="matematika"></td>
			</tr>
			<tr>
				<td>IPA</td>
				<td>:</td>
				<td><input type="text" name="ipa"></td>
			</tr>
			<tr>
				<td>KKPI</td>
				<td>:</td>
				<td><input type="text" name="kkpi"></td>
			</tr>
			<tr>
				<td>Kewirausahan</td>
				<td>:</td>
				<td><input type="text" name="kwu"></td>
			</tr>
			<tr>
				<td>Fisika</td>
				<td>:</td>
				<td><input type="text" name="fisika"></td>
			</tr>
			<tr>
				<td>Kimia</td>
				<td>:</td>
				<td><input type="text" name="kimia"></td>
			</tr>
			<tr>
				<td>Seni Budaya</td>
				<td>:</td>
				<td><input type="text" name="senbud"></td>
			</tr>
			<tr>
				<td>IPS</td>
				<td>:</td>
				<td><input type="text" name="ips"></td>
			</tr>
			<tr>
				<td>B. Jepang</td>
				<td>:</td>
				<td><input type="text" name="jepang"></td>
			</tr>
			<tr>
				<td>Produktif 1</td>
				<td>:</td>
				<td><input type="text" name="produktif1"></td>
			</tr>
			<tr>
				<td>Produktif 2</td>
				<td>:</td>
				<td><input type="text" name="produktif2"></td>
			</tr>
			<tr>
				<td>Produktif 3</td>
				<td>:</td>
				<td><input type="text" name="produktif3"></td>
			</tr>
			<tr>
				<td>Produktif 4</td>
				<td>:</td>
				<td><input type="text" name="produktif4"></td>
			</tr>
			<tr>
				<td>Produktif 5</td>
				<td>:</td>
				<td><input type="text" name="produktif5"></td>
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