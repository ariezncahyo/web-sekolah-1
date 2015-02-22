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
      <h1>DATA PRAKERIN ANDA</h1>
<?php
	require_once "../config/lib.php";

	if( !IsLoggedIn() )
	{
		echo "Belum Login";
	}
	else
	{
		$login		= GetLoginInfo();
		$account	= GetAccountInfo();
		
		if( $login["flag"] == "US" )
		{
?>
			Tempat PRAKERIN: <?php echo $account["tempat"]; ?>
			<BR>
			Tanggal Mulai: <?php echo $account["mulai"]; ?>
			<BR>
			Tanggal Selesai: <?php echo $account["selesai"]; ?>
			<BR>
			Pembimbing: <?php echo $account["pembimbing"]; ?>
			<BR>
			Nilai Prakerin: <?php echo $account["nilai"]; ?>
			<BR><BR>
						
			
			<I>Diposting secara otomatis dari database.</I>
			<BR><BR>
<?php
		}
	}
?>
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
</body>
</html>
<?php
	}
?>