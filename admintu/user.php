<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || ($_SESSION['flag'] != "AT") ) 
	echo "<html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
else
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HALAMAN ADMIN TATA USAHA</title>
</head>

<body>
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="82" colspan="3"><strong><center><font color="#FF0000" size="+6">HALAMAN ADMIN TATA USAHA</font></center></strong><br><hr></td>
</tr>
  <tr>
    <td width="250" height="403" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr></tr>
      <tr>
        <td><?php include "menu.php"; ?> </td>
      </tr>
    </table>      <p>&nbsp;</p></td>
    <td width="679" colspan="2" valign="top"><?php include "_user.php"; ?></td>
  </tr>
  <tr>
    <td height="29" colspan="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
	}
?>