<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AT") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> <title>Untitled Document</title>  
<link href="style.css" rel="stylesheet" type="text/css" />  
</head>  
	<body>  
		<div id="menu">
        	<ul>
            	<li><a href="index.php">Beranda</a></li>
                <li><a href="tu.php">Tata Usaha</a></li>
				<li><a href="user.php">User</a></li>
				<li><a href="pegawai.php">Kepegawaian</a></li>
                <li><a href="../index.php">Kembali ke Website</a></li>
                <li><a href="../logout.php">Logout</a></li>
			</ul>
		</div>  
	</body>
</html> 
<?php
	}
?>