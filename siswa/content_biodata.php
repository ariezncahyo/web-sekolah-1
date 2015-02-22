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
      <h1>DATA ANDA</h1>
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
			$sisa			= $account["sisa_iuran_bulanan"];
			$total			= 2460000;
			$sudah_bayar	= ( $total - $sisa ) / 205000;
			
			for( $i = 0; $i < 12; $i++ )
			{
				$flag[$i]	= "";
			}
			
			for( $i = 0; $i < $sudah_bayar; $i++ )
			{
				$flag[$i]	= "checked";
			}
?>
			<STYLE>
				#biodata
				{
					font-size: 14px;
				}
				
				#bayaran
				{
					font-size: 14px;
				}
			</STYLE>
			
			<CENTER><H3>Biodata</H3></CENTER>
			<TABLE id="biodata" width="100%">
				<TR>
					<TD width="40%">
						Nama Lengkap
					</TD>
					
					<TD>
						: <?php echo $account["nama"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Nomor Induk Siswa
					</TD>
					
					<TD>
						: <?php echo $account["nis"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Kelas / Jurusan
					</TD>
					
					<TD>
						: <?php echo $account["kelas"] . " / " . $account["jurusan"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Tempat Tanggal Lahir
					</TD>
					
					<TD>
						: <?php echo $account["tempat_lahir"] . ", " . $account["tanggal_lahir"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Jenis Kelamin
					</TD>
					
					<TD>
						: <?php if( $account["jenis_kelamin"] == "L" ) echo "Laki - Laki"; else echo "Perempuan"; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Agama
					</TD>
					
					<TD>
						: <?php echo $account["agama"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Alamat
					</TD>
					
					<TD>
						: <?php echo $account["alamat"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Nomor Telepon
					</TD>
					
					<TD>
						: <?php echo $account["telp"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Nama Ayah
					</TD>
					
					<TD>
						: <?php echo $account["nama_ayah"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Alamat Ayah
					</TD>
					
					<TD>
						: <?php echo $account["alamat_ayah"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Telepon Ayah
					</TD>
					
					<TD>
						: <?php echo $account["telp_ayah"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Nama Ibu
					</TD>
					
					<TD>
						: <?php echo $account["nama_ibu"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Alamat Ibu
					</TD>
					
					<TD>
						: <?php echo $account["alamat_ibu"]; ?>
					</TD>
				</TR>
				
				<TR>
					<TD>
						Telepon Ibu
					</TD>
					
					<TD>
						: <?php echo $account["telp_ibu"]; ?>
					</TD>
				</TR>
			</TABLE>
			
			<BR><BR>
			
			<CENTER><H3>SPP Bulanan</H3></CENTER>
			<TABLE id="bayaran" width="100%">
				<TR>
					<TD>
						<INPUT type="checkbox" disabled <?php echo $flag[0]; ?>>Juni</INPUT><BR>
						<INPUT type="checkbox" disabled <?php echo $flag[1]; ?>>Juli</INPUT><BR>
						<INPUT type="checkbox" disabled <?php echo $flag[2]; ?>>Agustus</INPUT>
					</TD>
					
					<TD>
						<INPUT type="checkbox" disabled <?php echo $flag[3]; ?>>September</INPUT><BR>
						<INPUT type="checkbox" disabled <?php echo $flag[4]; ?>>Oktober</INPUT><BR>
						<INPUT type="checkbox" disabled <?php echo $flag[5]; ?>>November</INPUT>
					</TD>
					
					<TD>
						<INPUT type="checkbox" disabled <?php echo $flag[6]; ?>>Desember</INPUT><BR>
						<INPUT type="checkbox" disabled <?php echo $flag[7]; ?>>Januari</INPUT><BR>
						<INPUT type="checkbox" disabled <?php echo $flag[8]; ?>>Februari</INPUT>
					</TD>
					
					<TD>
						<INPUT type="checkbox" disabled <?php echo $flag[9]; ?>>Maret</INPUT><BR>
						<INPUT type="checkbox" disabled <?php echo $flag[10]; ?>>April</INPUT><BR>
						<INPUT type="checkbox" disabled <?php echo $flag[11]; ?>>Mei</INPUT>
					</TD>
				</TR>
			</TABLE>
			
			<BR><BR>
			<CENTER><H3>Sisa Dana Bangunan: Rp. <?php echo $account["sisa_dana_bangunan"]; ?></H3></CENTER>
			
			<BR><BR>
			<I>Diposting secara otomatis dari database.</I>
			<BR><BR>
<?php
		}
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
<?php
	}
?>