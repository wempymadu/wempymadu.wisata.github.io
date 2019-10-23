<?php
include "global/config.inc.php";
$menu=$_REQUEST['menu'];
$id=$_REQUEST['id'];
$id_album=$_REQUEST['id_album'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Selamat Datang di Website Komodo</title>
<link rel="stylesheet" href="css/index.css" type="text/css" />

<style type="text/css">
<!-- v
body {
	
}
body,td,th {
	color: #999999;
}
-->
</style></head>

<body>
<?php include "menu.php"; ?>
<?php include "content.php"; ?>
<?php include "footer.php"; ?>

<p>&nbsp;</p>
</body>
</html>