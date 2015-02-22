<?php
	if( !IsLoggedIn() )
	{
?>
        <li class="last">		<FORM method="POST" action="act_log.php">
			<INPUT name="username" type="text" placeholder="Username" />
			<INPUT name="password" type="password" placeholder="Password" />
			<INPUT type="submit" value="Log In" style="" />
		</FORM></li>
<?php
	}
	else
	{
?>
<?php
			$array	= GetLoginInfo();
			$as		= "";
			
			switch( $array["flag"] )
			{
				case "SU":
					$as	= "Super User";
					echo "<li><a href='admin/index.php'>Panel Admin</a></li>";
					break;
					
				case "US":
					$as	= "Siswa";
					echo "<li><a href='siswa/index.php'>Data Siswa</a></li>";
					break;
					
				case "AH":
					$as	= "Admin Hubin";
					echo "<li><a href='adminhb/index.php'>Panel Hubin</a></li>";
					break;
					
				case "AK":
					$as	= "Admin Kesiswaan";
					echo "<li><a href='adminkes/index.php'>Panel Kesiswaan</a></li>";
					break;
					
				case "AN":
					$as	= "Admin Sarana";
					echo "<li><a href='adminsa/index.php'>Panel Sarana</a></li>";
					break;
					
				case "AU":
					$as	= "Admin Kurikulum";
					echo "<li><a href='adminkuri/index.php'>Panel Kurikulum</a></li>";
					break;
					
				case "AT":
					$as	= "Admin Tata Usaha";
					echo "<li><a href='admintu/index.php'>Panel TU</a></li>";
					break;
					
				default:
					$as	= "Tidak Diketahui";
			}
			
			echo "<li>User ID " .$array["user"]. " masuk sebagai " .$as. ".</li>";
?>
		        <li class="last"><a href="logout.php">Logout</a></li>
<?php
	}
?>