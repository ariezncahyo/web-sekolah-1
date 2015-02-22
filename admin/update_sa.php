<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
<form name="update" action="act_update_sa.php" method="post">
<table>
<tr>
<td colspan="2" style="font-weight:bold;font-size:25px;text-align:center;">UPDATE SARANA</td>
</tr>
<?php
include "../config/config.php";
$id = $_GET['id'];
$ambil_data = mysql_query("select * from tb_prasarana where id='$id'");
while($data = mysql_fetch_array($ambil_data)){
?>
<tr>
<input type="hidden" name="id" value="<?php echo $data['id'];?>">
			<tr>
				<td>Nama barang</td>
				<td>:</td>
				<td><input type="text" name="n_brg" value="<?php echo $data['n_brg'];?>"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="text" name="jml" value="<?php echo $data['jml'];?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" name="ket" value="<?php echo $data['ket'];?>"></td>
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