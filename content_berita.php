<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>SMKN 1 Katapang</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->

 <?php
	include('config/config.php');
	$ambil_data = mysql_query("select * from tb_article Order By IdBerita DESC");
	
	while($data = mysql_fetch_array($ambil_data)){


echo "<left><h1><strong>".$data['Judul']."</strong></h1></left>";
echo "<font size='2' color='green'>Tangggal ".$data['TglBerita']." Jam ".$data['JamBerita']."</font></br>";
echo "<left><p>".$data['Berita'];

echo "<BR>";
echo "<BR>";
?>
<?php
	}
?>

      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
</body>
</html>