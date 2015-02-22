<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
<form name="update" action="act_update_s2.php" method="post">
<table>
<tr>
<td colspan="2" style="font-weight:bold;font-size:25px;text-align:center;">UPDATE DATA SEMESTER 2</td>
</tr>
<?php
include "../config/config.php";
$id = $_GET['nis'];
$ambil_data = mysql_query("select * from tbl_kurikulum_s2 where nis='$id'");
while($data = mysql_fetch_array($ambil_data)){
?>
<tr>
	<td colspan="3">PERUBAHAN DATA UNTUK NIS <?php echo $data['nis'];?></td>
<tr>
<tr>
<input type="hidden" name="nis" value="<?php echo $data['nis'];?>">
			<tr>
				<td>P. Agama</td>
				<td>:</td>
				<td><input type="text" name="agama" value="<?php echo $data['agama2'];?>"></td>
			</tr>
			<tr>
				<td>PKn</td>
				<td>:</td>
				<td><input type="text" name="pkn" value="<?php echo $data['pkn2'];?>"></td>
			</tr>
			<tr>
				<td>B. Indonesia</td>
				<td>:</td>
				<td><input type="text" name="indonesia" value="<?php echo $data['indonesia2'];?>"></td>
			</tr>
			<tr>
				<td>Penjaskes</td>
				<td>:</td>
				<td><input type="text" name="penjaskes" value="<?php echo $data['penjaskes2'];?>"></td>
			</tr>
			<tr>
				<td>B. Inggris</td>
				<td>:</td>
				<td><input type="text" name="inggris" value="<?php echo $data['inggris2'];?>"></td>
			</tr>
			<tr>
				<td>Matematika</td>
				<td>:</td>
				<td><input type="text" name="matematika" value="<?php echo $data['matematika2'];?>"></td>
			</tr>
			<tr>
				<td>IPA</td>
				<td>:</td>
				<td><input type="text" name="ipa" value="<?php echo $data['ipa2'];?>"></td>
			</tr>
			<tr>
				<td>KKPI</td>
				<td>:</td>
				<td><input type="text" name="kkpi" value="<?php echo $data['kkpi2'];?>"></td>
			</tr>
			<tr>
				<td>Kewirausahan</td>
				<td>:</td>
				<td><input type="text" name="kwu" value="<?php echo $data['kwu2'];?>"></td>
			</tr>
			<tr>
				<td>Fisika</td>
				<td>:</td>
				<td><input type="text" name="fisika" value="<?php echo $data['fisika2'];?>"></td>
			</tr>
			<tr>
				<td>Kimia</td>
				<td>:</td>
				<td><input type="text" name="kimia" value="<?php echo $data['kimia2'];?>"></td>
			</tr>
			<tr>
				<td>B. Sunda</td>
				<td>:</td>
				<td><input type="text" name="sunda" value="<?php echo $data['sunda2'];?>"></td>
			</tr>
			<tr>
				<td>PLH</td>
				<td>:</td>
				<td><input type="text" name="plh" value="<?php echo $data['plh2'];?>"></td>
			</tr>
			<tr>
				<td>Produktif 1</td>
				<td>:</td>
				<td><input type="text" name="produktif1" value="<?php echo $data['produktif12'];?>"></td>
			</tr>
			<tr>
				<td>Produktif 2</td>
				<td>:</td>
				<td><input type="text" name="produktif2" value="<?php echo $data['produktif22'];?>"></td>
			</tr>
			<tr>
				<td>Produktif 3</td>
				<td>:</td>
				<td><input type="text" name="produktif3" value="<?php echo $data['produktif32'];?>"></td>
			</tr>
			<tr>
				<td>Produktif 4</td>
				<td>:</td>
				<td><input type="text" name="produktif4" value="<?php echo $data['produktif42'];?>"></td>
			</tr>
			<tr>
				<td>Produktif 5</td>
				<td>:</td>
				<td><input type="text" name="produktif5" value="<?php echo $data['produktif52'];?>"></td>
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