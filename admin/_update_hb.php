<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
<form name="update" action="act_update_hb.php" method="post">
<table>
<tr>
<td colspan="2" style="font-weight:bold;font-size:25px;text-align:center;">UPDATE DATA PRAKERIN</td>
</tr>
<?php
include "../config/config.php";
$id = $_GET['nis'];
$ambil_data = mysql_query("select * from tbl_hubin where nis='$id'");
while($data = mysql_fetch_array($ambil_data)){
?>
<tr>
	<td colspan="3">PERUBAHAN DATA UNTUK NIS <?php echo $data['nis'];?></td>
<tr>
<input type="hidden" name="nis" value="<?php echo $data['nis'];?>">
			<tr>
				<td>Tempat</td>
				<td>:</td>
				<td><input type="text" name="tempat" value="<?php echo $data['tempat'];?>"></td>
			</tr>
			<tr>
				<td>Tanggal Mulai</td>
				<td>:</td>
				<td><input type="text" name="mulai" value="<?php echo $data['mulai'];?>"></td>
			</tr>	
			<tr>
				<td>Tanggal Selesai</td>
				<td>:</td>
				<td><input type="text" name="selesai" value="<?php echo $data['selesai'];?>"></td>
			</tr>
			<tr>
				<td>Pembimbing</td>
				<td>:</td>
				<td><input type="text" name="pembimbing" value="<?php echo $data['pembimbing'];?>"></td>
			</tr>
			<tr>
				<td>Nilai</td>
				<td>:</td>
				<td><input type="text" name="nilai" value="<?php echo $data['nilai'];?>"></td>
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