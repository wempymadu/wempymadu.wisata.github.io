<?php
include "../global/cek_session_admin.php";
include "../global/config.inc.php";

$menu=$_REQUEST['menu'];
$aksi=$_REQUEST['aksi'];
$id=$_REQUEST['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator | Komodo Web</title>
<link rel="stylesheet" href="../css/css_admin.css" type="text/css" />	
<style type="text/css">
<!--
body {
	background-image: url(../images/background.jpg);
}
-->
</style></head>

<body>
<table width="100%" style="border:1px solid #999; color:#FFF;" bgcolor="#79ab2c" border="0">
<tr>
	<td height="30" width="8%" align="center"><a href="index.php" class="a1">HOME</a></td>
	<td height="30" width="8%" align="center"><a href="index.php?menu=user" class="a1">USER MANAGER</a></td>
	<td height="30" width="8%" align="center"><a href="index.php?menu=bukutamu" class="a1">BUKU TAMU</a></td>
	<td height="30" width="8%" align="center"><a href="index.php?menu=polling" class="a1">POLLING</a></td>
	<td height="30" width="8%" align="center"><a href="index.php?menu=berita" class="a1">BERITA</a></td>	
	<td height="30" width="8%" align="center"><a href="index.php?menu=galeri" class="a1">GALERI</a></td>	
	<td height="30" width="8%" align="center"><a href="../index.php" target="_blank" class="a1">VIEW SITE</a></td>	
	<td height="30" width="8%" align="center"><a href="logout.php" class="a1">LOGOUT</a></td>	
	<td height="30" width="36%">&nbsp;</td>	
</tr>
</table>
<br />
<?php
if ($menu=="user")
{
	include "user_manager.inc.php";	
}
elseif ($menu=="bukutamu")
{
	include "bukutamu.inc.php";	
}
elseif ($menu=="polling")
{
	include "polling.inc.php";	
}
elseif ($menu=="berita")
{
	include "berita.inc.php";	
}

elseif ($menu=="galeri")
{
	include "galeri.inc.php";	
}
elseif ($menu=="galeri_detil")
{
	include "galeri_detil.inc.php";	
}
else
{
	echo "<h1>Selamat Datang, Administrator!!</h1>";	
}
?>
</body>
</html>
