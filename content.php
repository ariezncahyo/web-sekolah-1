<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>SMKN 1 Katapang</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!-- Homepage Specific Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
<!-- End Homepage Specific Elements -->
</head>
<body id="top">
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      <div id="homepage" class="clear">
        <!-- ###### -->
        <div id="left_column">
          <h2>KEGIATAN SISWA</h2>
          <div class="imgholder"><a href="galery.php"><img src="images/hm/1.JPG" width="220" height="120" alt="" /></a></div>
          <div class="imgholder"><a href="galery.php"><img src="images/hm/2.JPG" width="220" height="120" alt="" /></a></div>
          <div class="imgholder"><a href="galery.php"><img src="images/hm/3.JPG" width="220" height="120" alt="" /></a></div>
          <div class="imgholder"><a href="galery.php"><img src="images/hm/4.JPG" width="220" height="120" alt="" /></a></div>
        </div>
        <!-- ###### -->
        <div id="latestnews">
          <h2>BERITA - BERITA TERBARU</h2>
<ul>
 <?php
	include('config/config.php');
	$ambil_data = mysql_query("select * from tb_article Order By IdBerita DESC LIMIT 3");
	
	while($data = mysql_fetch_array($ambil_data)){

echo "<li class='clear'>";
echo "<div class='imgl'><img src='images/logo.png' alt='' width='125' height='125' /></div>";
echo "<div class='latestnews'>";
echo "<p><a href='berita.php'>".$data['Judul']."</a></p>";
echo "<p>".substr(stripslashes($data['Berita']),0,100)."....</p>";
echo "</div>";
echo "</li>";
?>
<?php
	}
?>
</ul>          <p class="readmore"><a href="berita.php">Klik disini untuk melihat semua berita &raquo;</a></p>
        </div>
        <!-- ###### -->
        <div id="right_column">
          <div class="holder">
            <h2>VISI</h2>
            <p>Menjadi SMK terunggul di Jawa Barat pada tahun 2015</p><BR>
            <h2>MISI</h2>
				  <ul>
					<li>Melaksanakan Pembelajaran Profesional dan Berbasis IT</li>
					<li>Mengembangkan Pelayanan Administrasi Berbasis IT</li>
					<li>Meningkatkan SDM yang berkualitas</li>
					<li>Menyiapkan infrastruktur yang handal dan berbasis IT</li>
					<li>Menyiapkan lulusan yang terampil, mandiri, berwawasan global, berkarakter bangsa, berdaya saing dan berwawasan lingkungan.</li>
				  </ul>
				  <BR>
            <h2>STRATEGI</h2>
			<p>Disiplin - Belajar - Berlatih - Berkarya - Inovatif</p>
          </div>
        </div>
        <!-- ###### -->
      </div>
      <!-- ####################################################################################################### -->
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
</body>
</html>