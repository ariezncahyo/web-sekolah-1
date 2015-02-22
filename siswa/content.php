<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "US") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>SMKN 1 Katapang</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      <h1>SELAMAT DATANG</h1>
      <p>Selamat datang. Website tugas akhir ini adalah proyek yang sangat spesial bagi saya. Setiap anggota bekerjasama untuk menyelesaikan Website ini, dan bersama-sama kami menciptakan sesuatu yang indah sampai-sampai saya merasa bangga menjadi ketua dari tim ini. Waktu luang saya telah dipersembahkan untuk Website ini, dan saya berdedikasi untuk membuat sesuatu yang lebih baik.</p>
	  <p style="text-align: right;">&#8212; Dicky Faisal Dramar</p>
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
</body>
</html>
<?php
	}
?>