<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
<form name="update" action="act_update_us.php" method="post">
<table>
<tr>
<td colspan="2" style="font-weight:bold;font-size:25px;text-align:center;">UPDATE USER</td>
</tr>
<?php
include "../config/config.php";
$id = $_GET['id'];
$ambil_data = mysql_query("select * from tbl_users where username='$id'");
while($data = mysql_fetch_array($ambil_data)){
?>
<tr>
	<td colspan="3">PERUBAHAN DATA UNTUK USER <?php echo $data['username'];?></td>
<tr>
<tr>
<input type="hidden" name="username" value="<?php echo $data['username'];?>">
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
						<OPTION value="GR">Guru
						<OPTION value="AH">Admin Hubin
						<OPTION value="AK">Admin Kesiswaan
						<OPTION value="AN">Admin Sarana
						<OPTION value="AU">Admin Kurikulum
						<OPTION value="AT">Admin Tata Usaha
					</SELECT></td>
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