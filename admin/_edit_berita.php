<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
<form name="update" action="act_edit_berita.php" method="post">
<table>
<tr>
<td colspan="2" style="font-weight:bold;font-size:25px;text-align:center;">EDIT BERITA</td>
</tr>
<?php
include "../config/config.php";
$id = $_GET['id'];
$ambil_data = mysql_query("select * from tb_article where IdBerita='$id'");
while($data = mysql_fetch_array($ambil_data)){
?>
<tr>
<input type="hidden" name="id" value="<?php echo $data['IdBerita'];?>">
			<tr>
				<td>Judul Berita</td>
				<td><input type="text" name="judul" size="100" value="<?php echo $data['Judul'];?>"/></td>
			</tr>
			<?php
			echo '<tr><td valign="top"> Berita</td>
	  <td><textarea type="textarea" name="berita" cols="100" rows="20">' .stripslashes($data['Berita']) .'</textarea></td> </tr>';
			?>
<?php } ?>
<tr><td colspan="2" style="text-align:right"><input type="submit" value="Edit"></td></tr>
</table>
</form>
</body>
</html>
<?php
	}
?>