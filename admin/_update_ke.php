<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
<form name="update" action="act_update_ke.php" method="post">
<table>
<tr>
<td colspan="2" style="font-weight:bold;font-size:25px;text-align:center;">UPDATE DATA KESISWAAN</td>
</tr>
<?php
include "../config/config.php";
$id = $_GET['nis'];
$ambil_data = mysql_query("select * from tbl_kesiswaan where nis='$id'");
while($data = mysql_fetch_array($ambil_data)){
?>
<tr>
	<td colspan="3">PERUBAHAN DATA UNTUK NIS <?php echo $data['nis'];?></td>
<tr>
<tr>
<input type="hidden" name="nis" value="<?php echo $data['nis'];?>">
			<tr>
				<td>Ekstra Kulikuler</td>
				<td>:</td>
				<td><input type="text" name="ekskul" value="<?php echo $data['ekskul'];?>"></td>
			</tr>
			<tr>
				<td>Poin Pelanggaran</td>
				<td>:</td>
				<td><input type="text" name="poin" value="<?php echo $data['poin'];?>"></td>
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