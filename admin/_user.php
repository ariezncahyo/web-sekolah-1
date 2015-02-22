<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
      <h1>User</h1>
        <table border="2" summary="Users" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Password</th>
              <th>Flag</th>
              <th>Aksi</th>
            </tr>
			<?php
				include('../config/config.php');
				$ambil_data = mysql_query("select * from tbl_users");
				$no = 0;
				while($data = mysql_fetch_array($ambil_data)){
			?>
          </thead>
          <tbody>
            <tr>
				<td><?php echo $no = $no + 1;?></td>
				<td><?php echo $data['username'];?></td>
				<td><?php echo $data['password'];?></td>
				<td><?php echo $data['flag'];?></td>
                <td><a href="hapus_user.php?id=<?php echo $data['username'];?>">Hapus</a> | <a href="supdate_us.php?id=<?php echo $data['username'];?>">Edit</a></td>
            </tr>
			<?php } ?>
          </tbody>
        </table>
	<h1>Pemasukan Data User</h1>
	<form name="daftar" method="post" action="act_user.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Flag</td>
				<td>:</td>
				<td><SELECT name="flag">
						<OPTION value="SU">Super User
						<OPTION value="US">User
						<OPTION value="AH">Admin Hubin
						<OPTION value="AK">Admin Kesiswaan
						<OPTION value="AN">Admin Sarana
						<OPTION value="AU">Admin Kurikulum
						<OPTION value="AT">Admin Tata Usaha
					</SELECT></td>
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