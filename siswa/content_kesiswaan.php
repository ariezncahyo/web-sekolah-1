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
      <h1>DATA KESISWAAN ANDA</h1>
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
			Poin Pelanggaran: <?php echo $account["poin"]; ?>
			<BR>
			Ekstrakulikuler Terdaftar: <?php echo $account["ekskul"]; ?>
			<BR><BR>
						
			<TABLE id="pelanggaran" border="1" width="100%">
				<TR>
					<TD>
						Poin
					</TD>
					
					<TD>
						Sanksi
					</TD>
				</TR>
				
				<TR>
					<TD>
						10
					</TD>
					
					<TD>
						Diberikan surat peringatan.
					</TD>
				</TR>
				
				<TR>
					<TD>
						20
					</TD>
					
					<TD>
						Pembinaan wali kelas/BP.
					</TD>
				</TR>
				
				<TR>
					<TD>
						25
					</TD>
					
					<TD>
						Pemanggilan orang tua dan membuat perjanjian ke satu.
					</TD>
				</TR>
				
				<TR>
					<TD>
						40
					</TD>
					
					<TD>
						Pembinaan kepala kompetensi.
					</TD>
				</TR>
				
				<TR>
					<TD>
						50
					</TD>
					
					<TD>
						Skorsing dan membuat perjanjian dua.
					</TD>
				</TR>
				
				<TR>
					<TD>
						75
					</TD>
					
					<TD>
						Skorsing dan home visit.
					</TD>
				</TR>
				
				<TR>
					<TD>
						100
					</TD>
					
					<TD>
						Drop out.
					</TD>
				</TR>
			</TABLE>
			
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