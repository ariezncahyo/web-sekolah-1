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
      <h1>NILAI ANDA</h1>
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
			<STYLE>
				#nilai
				{
					text-align: center;
				}
				
				#nilai tr td b
				{
					font-size: 16px;
				}
			</STYLE>

			<TABLE id="nilai" width="100%" border="1">
				<TR>
					<TD>
						<B>PELAJARAN</B>						
					</TD>
					
					<TD>
						<B>Sem 1</B>
					</TD>
					
					<TD>
						<B>Sem 2</B>
					</TD>
					
					<TD>
						<B>Sem 3</B>
					</TD>
					
					<TD>
						<B>Sem 4</B>
					</TD>
					
					<TD>
						<B>Sem 5</B>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>PAI</B>
					</TD>
					
					<TD>
						<?php echo $account["agama1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["agama2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["agama3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["agama4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["agama5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>PKn</B>
					</TD>
					
					<TD>
						<?php echo $account["pkn1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["pkn2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["pkn3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["pkn4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["pkn5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Indonesia</B>
					</TD>
					
					<TD>
						<?php echo $account["indonesia1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["indonesia2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["indonesia3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["indonesia4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["indonesia5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Penjaskes</B>
					</TD>
					
					<TD>
						<?php echo $account["penjaskes1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["penjaskes2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["penjaskes3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["penjaskes4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["penjaskes5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Inggris</B>
					</TD>
					
					<TD>
						<?php echo $account["inggris1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["inggris2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["inggris3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["inggris4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["inggris5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Matematika</B>
					</TD>
					
					<TD>
						<?php echo $account["matematika1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["matematika2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["matematika3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["matematika4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["matematika5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>IPA</B>
					</TD>
					
					<TD>
						<?php echo $account["ipa1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["ipa2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["ipa3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["ipa4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["ipa5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>KKPI</B>
					</TD>
					
					<TD>
						<?php echo $account["kkpi1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kkpi2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kkpi3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kkpi4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kkpi5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>KWU</B>
					</TD>
					
					<TD>
						<?php echo $account["kwu1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kwu2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kwu3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kwu4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kwu5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Fisika</B>
					</TD>
					
					<TD>
						<?php echo $account["fisika1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["fisika2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["fisika3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["fisika4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["fisika5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Kimia</B>
					</TD>
					
					<TD>
						<?php echo $account["kimia1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kimia2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kimia3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kimia4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["kimia5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Sunda</B>
					</TD>
					
					<TD>
						<?php echo $account["sunda1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["sunda2"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["sunda3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["sunda4"]; ?>
					</TD>
					
					<TD>
						-
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>PLH</B>
					</TD>
					
					<TD>
						<?php echo $account["plh1"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["plh2"]; ?>
					</TD>
					
					<TD>
						-
					</TD>
					
					<TD>
						-
					</TD>
					
					<TD>
						-
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Seni Budaya</B>
					</TD>
					
					<TD>
						-
					</TD>
					
					<TD>
						-
					</TD>
					
					<TD>
						<?php echo $account["senibudaya3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["senibudaya4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["senibudaya5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>IPS</B>
					</TD>
					
					<TD>
						-
					</TD>
					
					<TD>
						-
					</TD>
					
					<TD>
						<?php echo $account["ips3"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["ips4"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["ips5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Bahasa Jepang</B>
					</TD>
					
					<TD>
						-
					</TD>
					
					<TD>
						-
					</TD>
					
					<TD>
						-
					</TD>
					
					<TD>
						-
					</TD>
					
					<TD>
						<?php echo $account["jepang5"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Produktif 1</B>
					</TD>
					
					<TD>
						<?php echo $account["produktif11"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif12"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif13"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif14"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif15"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Produktif 2</B>
					</TD>
					
					<TD>
						<?php echo $account["produktif21"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif22"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif23"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif24"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif25"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Produktif 3</B>
					</TD>
					
					<TD>
						<?php echo $account["produktif31"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif32"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif33"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif34"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif35"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Produktif 4</B>
					</TD>
					
					<TD>
						<?php echo $account["produktif41"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif42"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif43"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif44"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif45"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						<B>Produktif 5</B>
					</TD>
					
					<TD>
						<?php echo $account["produktif51"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif52"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif53"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif54"]; ?>
					</TD>
					
					<TD>
						<?php echo $account["produktif55"]; ?>
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