<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "SU") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<body>
      <h1>Berita</h1>
        <table border="2" summary="Berita" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Isi Berita</th>
			  <th>Tanggal Berita</th>
			  <th>Jam Berita</th>
              <th>Penulis</th>
              <th>Aksi</th>
            </tr>
			<?php
				include('../config/config.php');
				$ambil_data = mysql_query("select * from tb_article");
				$no = 0;
				while($data = mysql_fetch_array($ambil_data)){
			?>
          </thead>
          <tbody>
            <tr>
				<td><?php echo $no = $no + 1;?></td>
				<td><?php echo substr(stripslashes($data['Judul']),0,20)."......";?></td>
				<td><?php echo substr(stripslashes($data['Berita']),0,50)."......";?></td>
				<td><?php echo $data['TglBerita'];?></td>
				<td><?php echo $data['JamBerita'];?></td>
				<td><?php echo $data['IdPenulis'];?></td>
                <td><a href="hapus_be.php?id=<?php echo $data['IdBerita'];?>">Hapus</a> | <a href="edit_berita.php?id=<?php echo $data['IdBerita'];?>">Edit</a></td>
            </tr>
			<?php } ?>
          </tbody>
        </table>
	<h1>Pemasukan Berita</h1>
		<form name="berita" method="post" action="act_berita.php">
		<table>
			<tr>
				<td>Judul Berita</td>
				<td><input type="text" name="judul" value=""size="100"/></td>
			</tr>
			<tr>
				<td valign="top">Berita</td>
				<td><textarea type="textarea" name="berita" cols="100" rows="20"></textarea></td>
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